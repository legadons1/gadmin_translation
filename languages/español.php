<?php
// THIS USES THE BASIC PHP VARIABLE SYNTAX. PLEASE DON'T WRITE ANYTHING OUTSIDE THE "". IF YOU'RE GOING TO USE THE " CHAR INSIDE A STRING,
// BE SURE TO PUT A \ CHAR BEFORE THE ", FOR EXAMPLE: Press the \"Submit\" button.
// THESE WILL BREAK THE SYSTEM:
// Press the "Submit" button.
// Press the "\Submit"\ button.
// Press the \"Submit" button.
// Press the "Submit\" button. 
// THE RIGHT WAY IS ONLY THIS ONE:
// Press the \"Submit\" button.
// \" This \" Will Not \" Break \"\" Anything \"\"\"
// HOPE YOU UNDERSTAND IT.
// YOU CAN ACTUALLY SEE A LIVE EXAMPLE AT LINE 48.
// THANK YOU FOR HELPING ME TRANSLATING THIS SCRIPT TO OTHER LANGUAGES.

$lang['email_invalid'] = "El email que has proporcionado es invalido";
$lang['not_image'] = "El archivo no es una imagen";
$lang['img_large'] = "La imagen es demaciado grande";
$lang['types_allowed'] = "Lo sentimos, sólo se permiten archivos tipo JPG, JPEG, PNG & GIF.";
$lang['file_not_uploaded'] = "Lo sentimos, tu imagen no ha sido subida.";
$lang['problem_uploading'] = "Lo sentimos, ha ocurrido un error al subir tu imagen.";
$lang['staff_applications'] = "Aplicaciones de Administración";
$lang['button_login'] = "Presiona el boton de debajo para iniciar sesión";
$lang['script'] = "Script";
$lang['exploiting'] = "Intento de Exploiting";
$lang['pending'] = "Pendiente...";
$lang['accepted'] = "Aceptado...";
$lang['already_admin'] = "Ya eres actualmente un administrador";
$lang['report_to'] = "REPORTA ESTO A";
$lang['denied'] = "Denegado...";
$lang['apply_now'] = "Aplicar ahora!";
$lang['apply'] = "Aplicar";
$lang['playtime'] = "Captura de pantalla de tu total de horas jugadas:";
$lang['warns'] = "Captura de pantalla de tus advertencias (escribe !warns in-game):";
$lang['email'] = "Email:";
$lang['specify_email'] = "Por favor especifica tu email";
$lang['submit'] = "Enviar";
$lang['cancel'] = "Cancelar";
$lang['submit_applies'] = "Aplicaciones Enviadas";
$lang['weird_stuff_report'] = "Algo raro esta pasando, por favor reporta esto a ";
$lang['watch_application'] = "Mirar esta aplicación";
$lang['error'] = "Error";
$lang['not_found'] = "Lo sentimos, la pagina no ha sido encontrada";
$lang['if_not'] = "Si no eres re-dirigido en 5 segundos, presiona";
$lang['here'] = "aquí";
$lang['admin_p'] = "Panel de Administración";
$lang['change_questions'] = "Cambiar Preguntas";
$lang['quest_desc'] = "Puedes cambiar las preguntas de las aplicaciones aquí, recuerda presionar \"Enviar\" al final del todo.";
$lang['quest'] = "Pregunta";
$lang['manage_admins'] = "Administrar Administradores";
$lang['manage_admins_desc'] = "Ten en cuenta que cualquier administrador especificado aquí, tendrá derecho de administrar las aplicaciones, administradores y baneos.";
$lang['steamid64'] = "SteamID64";
$lang['specify_the'] = "Por favor especifica el";
$lang['of_target'] = "del objetivo:";
$lang['manage_bans'] = "Administrar Baneos";
$lang['manage_bans_desc_1'] = "Aquí podras controlar quien debería aplicar o quien no.";
$lang['manage_bans_desc_2'] = "Ademas, podras desbanear gente desde aquí que ha intentado exploitear el sistema.";
$lang['id'] = "ID";
$lang['name'] = "Nombre";
$lang['date'] = "Fecha";
$lang['banned_b'] = "Baneado por";
$lang['cause'] = "Razón";
$lang['ban_reason'] = "Especifica la razón del baneo: (si estas desbaneando a alguien, solo deja esto en blanco)";
$lang['settings'] = "Configuración";
$lang['settings_desc_1'] = "Aquí puedes ver o modificar la configuración del sistema.";
$lang['settings_desc_2'] = "Solo el licenciado tiene acceso a esta configuración, así que no tendrás que preocuparte de otra gente viendo tus datos o contraseñas.";
$lang['general_conf'] = "Configuración General";
$lang['s_name'] = "Nombre del Servidor:";
$lang['s_name_desc'] = "El nombre de tu servidor.";
$lang['steam_api_get'] = "Steam API (consiguela";
$lang['api_desc'] = "Tu Steam API.";
$lang['index_url'] = "URL del Index:";
$lang['index_url_desc'] = "Incluye http:// al principio y una barra oblicua (/) al final.";
$lang['animated_index'] = "Mensajes animados del inicio: (escribe DISABLE para desactivar, o DEFAULT para usar el texto predeterminado.)";
$lang['animated_index_desc'] = "Ejemplo: Bienvenido!, Podrías ser un administrador?, Postulate ahora como administrador!";
$lang['mysql_conf'] = "Configuración MySQL";
$lang['host'] = "Host:";
$lang['host_desc'] = "El host o dirección de tu MySQL.";
$lang['user'] = "Usuario:";
$lang['user_desc'] = "El usuario de tu MySQL.";
$lang['pass'] = "Contraseña:";
$lang['pass_desc'] = "La contraseña de tu MySQL.";
$lang['database'] = "Base de Datos:";
$lang['database_desc'] = "El nombre de la base de datos de tu MySQL.";
$lang['adv_conf'] = "Configuración Avanzada";
$lang['dev_access'] = "Permitir accesso de desarrollador (recomendado).";
$lang['yes'] = "Si";
$lang['no'] = "No";
$lang['img_sys'] = "Activar sistema de subida de imagenes.";
$lang['captcha_sys'] = "Activar sistema de Re-Captcha:";
$lang['recaptcha'] = "Identificación de sitio - Puedes conseguirla";
$lang['recaptcha_desc'] = "Tu identificación de sitio de Re-Captcha (site key)";
$lang['recaptcha_s'] = "Identificación secreta de Re-Captcha - Puedes conseguirla";
$lang['recaptcha_s_desc'] = "Tu identificación secreta de Re-Captcha (secret key)";
$lang['error_occurred_mysql'] = "Un error ha ocurrido en tu configuración de MySQL, serás redirigido en un par de segundos.";
$lang['root_admin'] = "No puedes eliminar el administrador root";
$lang['p_hours'] = "Horas del Jugador";
$lang['warns'] = "Advertencias";
$lang['accept'] = "Aceptar"; 
$lang['deny'] = "Denegar";
$lang['remove'] = "Eliminar";
$lang['conn_error'] = "Hay un error al conectarse a la base de datos, revisa tu configuración, si el error persiste, abre un tiquet de soporte. ERROR:";
$lang['ban_by'] = "Has sido permanentemente baneado por";
$lang['ban_from'] = "de postularse";
$lang['ban_reason_sys'] = "Razón:";
$lang['the_system'] = "el sistema";
$lang['created_with'] = "Creado con";
$lang['by'] = "por";
$lang['admin_elements'] = "Administración";
$lang['apps'] = "Aplicaciones";
$lang['home'] = "Inicio";
$lang['logout'] = "Cerrar Sesión";
$lang['langt'] = "Lenguaje";
?>
