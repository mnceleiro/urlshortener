<?

// app/Model/User.php
class User extends AppModel {
	public $name = 'User';
	public $hasMany = array(
		'Link' => array(
			'className' => 'Link'
			)
		);

    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Se requiere un nombre'
            ), array(
            	'rule' => 'isUnique',
            	'message' => 'El usuario ya esta registrado.'
        	)
        ),'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'El campo no puede estar vacio'
            )
        ),
        'surname' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Se requiere un apellido'
            )
        )
    );
}
?>