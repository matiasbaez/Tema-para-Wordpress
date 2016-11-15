
<?php 
	//Creo el archivo de funciones


	// Registro el menu para poder usar
	register_nav_menus( 
		array(
			'principal' => 'Menu Principal', // La ubicacion y el nombre del menu
			'footer' => 'Menu Footer'
		)
	);


	/* Otra forma de agregar los estilos y scripts, etc
	   Ahora se utilizara los HOOCK ACTIONS
	   hook action == add_action() */

	// Los valores van en este orden (nombre_archivo, ubicacion, de quien depende, la version, donde ubicar - header o antes del body) false = header, true = antes body


	function recursos_del_tema() {
		wp_enqueue_style( 'style', get_stylesheet_uri());

		wp_enqueue_script( 'dropotron', get_template_directory_uri().'/assets/js/jquery.dropotron.min.js', array('jquery'), '1.4.3', true );

		wp_enqueue_script( 'skel', get_template_directory_uri().'/assets/js/skel.min.js', array('jquery'), '3.0.1 ', true );
	
		wp_enqueue_script( 'skel-viewport', get_template_directory_uri().'/assets/js/skel-viewport.min.js', array('jquery'), '3.0.1 ', true );

		wp_enqueue_script( 'util', get_template_directory_uri().'/assets/js/util.js', array('jquery'), '1.11.3', true );

		wp_enqueue_script( 'respond', get_template_directory_uri().'/assets/js/ie/respond.min.js', array('jquery'), '1.11.3', true );
	
		wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.11.3', true );
	}

	add_action( 'wp_enqueue_scripts', 'recursos_del_tema' );


?>