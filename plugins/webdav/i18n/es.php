<?php
return array(
    "webdav.meta.name"               => "Servicio WebDAV",
    "webdav.meta.title"              => "Montaje WebDAV en unidad de red",
    "webdav.meta.desc"               => "Los documentos del disco de red se pueden montar en la computadora actual o en la aplicación, y la administración de archivos puede ser tan conveniente y rápida como el disco duro local; al mismo tiempo, los archivos se pueden editar y guardar en tiempo real.",
    "webdav.config.isOpen"           => "Habilitar el servicio WebDAV",
    "webdav.config.isOpenDesc"       => "Una vez activado, los usuarios pueden montar el directorio del disco de red a través de webdav",
    "webdav.config.pathAllow"        => "Abrir la ubicación del directorio raíz",
    "webdav.config.pathAllowDesc"    => "La ubicación de la ruta raíz después de iniciar sesión y montar; Todos --- incluido el disco de red personal, el disco de red empresarial, favoritos, etc. (Los favoritos admiten favoritos de cualquier ruta)",
    "webdav.config.pathAllowAll"     => "todo",
    "webdav.config.pathAllowSelf"    => "Disco de red personal",
    "webdav.user.morePath"           => "Montar más ubicaciones",
    "webdav.config.logTitle"         => "Registro de ejecución",
    "webdav.config.logDesc"          => "Registro de solicitudes de ejecución de WebDAV",
    "webdav.config.systemAutoMount"  => "Montaje automático del cliente",
    "webdav.config.systemAutoMountDesc" => "Cuando se abre el cliente de PC, webdav se monta automáticamente",
    "webdav.tips.https"              => "<b>https:</b> Se recomienda utilizar https, ya que la transmisión cifrada es más segura;",
    "webdav.tips.upload"             => "<b>Límites de carga y descarga:</b> El máximo de archivos admitidos para la carga depende del límite de carga del servidor y del período de tiempo de espera. \n Puede configurarlo según sus necesidades; Límite de tamaño de archivo de carga recomendado: 500 MB; Período de tiempo de espera: 3600; <a href='https://doc.kodcloud.com/#/others/options' target='_blank'>Obtenga más información</a>",
    "webdav.tips.auth"               => "<b>Permisos de lectura, escritura, edición y otros:</b> Los permisos de lectura y escritura son exactamente los mismos que en la versión web; dado que el protocolo no tiene un mecanismo de informe de errores, las operaciones fallidas son básicamente equivalentes a no tener permisos.",
    "webdav.tips.uploadUser"         => "<b>Límites de carga y descarga:</b> el máximo de archivos admitidos para cargar depende del límite de carga del servidor y del período de espera; consulte al administrador para obtener la configuración de carga del servidor específico.",
    "webdav.tips.use"                => "Modo de uso: Después de habilitar el servicio WebDAV, ingrese al centro personal para visualizarlo (es necesario actualizar la página para que la configuración sea efectiva);",
    "webdav.tips.use3thAccount"      => "Si DingTalk o Enterprise WeChat están habilitados, deberá establecer una contraseña (puede iniciar sesión con su cuenta y contraseña normalmente) antes de poder usar webdav.",
    "webdav.tips.configErr"          => "Su servidor actual no admite el modo PATH_INFO como el acceso a /index.php/index;\n Al mismo tiempo, el parámetro de encabezado Autorización no se puede perder; de lo contrario, no podrá iniciar sesión;\n <a href='http://doc.kodcloud.com/v2/#/help/pathInfo' target='_blank'>Aprenda a habilitar</a>",
    "webdav.help.title"              => "Cómo utilizar",
    "webdav.help.connect"            => "Conéctate ahora",
    "webdav.help.windows"            => "<b>Ventana:</b> Haga clic derecho en el escritorio [Mi PC/Esta computadora] - Conectar unidad de red - Pegar la dirección webdav anterior, hacer clic en Finalizar - Introducir la contraseña de la cuenta; \n<br/> Recomendado: <a href='https://www.raidrive.com/download' target='_blank'>RaiDrive</a> , más potente y más compatible",
    "webdav.help.mac"                => "<b>Mac:</b> haga clic derecho en el buscador - Conectarse al servidor - Pegue la dirección webdav anterior, haga clic en Conectar - Ingrese su cuenta y contraseña",
    "webdav.help.others"             => "<b>Otros clientes y sistemas</b> : La dirección es la dirección webdav mencionada anteriormente, y la cuenta y la contraseña corresponden a su cuenta de inicio de sesión. El proceso básico es similar. \n<br/> Recomendación de dispositivos móviles Android e iOS: <a href='http://www.estrongs.com/' target='_blank'>ES File Explorer</a>",
    "webdav.help.windowsTips"        => "Para el primer uso, debe cancelar las restricciones de carga y HTTP. Después de descargar este archivo, haga clic en \"Ejecutar como administrador\".",
    "webdav.config.tab1"             => "Servicios WebDAV",
    "webdav.config.tab2"             => "Montaje de almacenamiento",
    "webdav.config.mountWebdav"      => "Montar el almacenamiento webdav",
    "webdav.config.mountWebdavDesc"  => "Después de habilitarlo, admite el montaje: agregue almacenamiento en segundo plano: administración de almacenamiento, seleccione el tipo de almacenamiento y seleccione webdav",
    "webdav.config.mountDetail1"     => "Admite el montaje de otros servidores webdav como almacenamiento local",
    "webdav.config.mountDetail2"     => "Puede montar webdav proporcionado por otros kodbox, se pueden interconectar varios kodbox",
    "webdav.config.mountDetail3"     => "Cuando el servicio de montaje lo proporciona kodbox, la carga y descarga del frontend se transfieren directamente sin transferencia del servidor."
);