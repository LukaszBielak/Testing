
<?php defined('SYSPATH') or die('No direct access allowed.');
 
class Model_Login extends ORM {
	
	protected $_table_name = 'users';
	
	public function rules()
    {
        return array(
            'login' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 32)),
                array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
            'pass' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 32)),
                array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
        );
    }
	
}
?>