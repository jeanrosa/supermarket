@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <div class="container">
        <div class="main row">
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 text-justify" >
                <h1>Nuestra Organización</h1>
                <hr/>
                <div>
                    <h2>AVISO LEGAL</h2>
                    <p>&nbsp;&nbsp;El presente documento contiene información que puede ser considerada de uso restringido y de propiedad exclusiva de CCLLOGISTICA, C.A., y corresponde a un conjunto de ideas que resumen nuestras "Politicas Empresariales" que reflejan nuestros valores, principios, opiniones, propuestas, condiciones y proceder propios para la realización y concreción de un conjunto de actividades de comercio de bienes, dígase, Alimentos, Productos de Higiene y Limpieza, Materia Prima para la Indústria.</p>
                </div>
                <hr class="secundario"/>


                <div class="row">
                    <div class="col-md-6">
                        <div class="color1">
                            <h3>I.</h3>
                            <p>&nbsp;&nbsp;La Compañía CCL-LOGÍSTICA, quiere dejar claro al publico en general que desestimamos la revelación y divulgación y hecho público del contenido del presente documento con una finalidad distinta de la anteriormente citada sin el previo conocimiento - por escrito - de la Compañía o de sus representantes.</p>
                            </br> </br> </br>
                            <img src="{{asset('iconos/siren.png')}}" class="img-responsive" width="50px" height="50px">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="color1">
                            <h3>II.</h3>
                            <p>&nbsp;&nbsp;Todos los datos presentados al interesado son brindados sobre la base del consentimiento de usar y divulgar la información aquí contenida de manera responsable incluyendo los tratados comerciales con la Compañía. El usuario acepta informar a todos los que, por su intermedio o utilizando su equipo informático, o electronico (Celular, Tablet, etc.) consulten o tengan acceso al contenido de este documento, acerca del uso restricto-confidencial del mismo.</p>
                            <img src="{{asset('iconos/ipad.png')}}" class="img-responsive" width="50px" height="50px">
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="color1">
                            <h3>III.</h3>
                            <p>&nbsp;&nbsp;El usuario también acepta NO reproducir, NI distribuir, ni tampoco permitir que otros reproduzcan o distribuyan cualquier material aquí contenido sin el consentimiento expreso, por escrito, de CCL LOGISTICA, C.A. o de sus representantes legales. <b>CCL LOGISTICA C.A.</b> no asume ninguna responsabilidad por el contenido de este documento si se utiliza con fines distintos a los aquí mencionados y concebidos. Tampoco la Compañía o sus Filiales ni ninguna entidad perteneciente al Grupo CCL LOGISTICA o sus filiales, ni ninguno de los asesores o representantes asumen algún tipo de responsabilidad, ya sea por negligencia o por otro motivo, por los daños o perjuicios derivados del uso inapropiado de este documento o sus contenidos.</p>
                            <img src="{{asset('iconos/poster.png')}}" class="img-responsive" width="50px" height="50px">
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="color1">
                            <h3>IV.</h3>
                            <p>&nbsp;&nbsp;<b>CCL LOGISTICA, C.A.</b> posee y detenta todos los derechos de titularidad, posesión y propiedad del material y marcas registradas aquí contenidas, incluyendo la documentación de respaldo, los archivos, el material de comercialización y multimedia.</p>
                            </br></br></br></br></br></br></br></br></br></br></br></br></br></br><img src="{{asset('iconos/shield.png')}}" class="img-responsive" width="50px" height="50px">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="color1">
                            <h3>V.</h3>
                            <p>&nbsp;&nbsp;<b>CCL-LOGISTICA, C.A.</b> también tiene mucho que ver con la seguridad y confidencialidad de los datos personales de sus usuarios y clientes. El envío de datos personales se realiza siempre a través de una conexión segura. Los datos facilitados por los usuarios son almacenados en una base de datos creada para tal fin y bajo circunstancia alguna se utilizará para algún otro propósito distinto de lo propuesto por <b>CCL-LOGISTICA, C.A.</b> Los datos personales recogidos serán objeto de tratamiento informatizado y de conformidad con la legislación nacional e internacional en la materia. En virtud de lo dispuesto en la Ley de Protección de Datos Personales, los visitantes, los usuarios y clientes de este sitio web pueden, en cualquier momento, ejercitar su derecho de acceso, rectificación y cancelación  o eliminación de sus datos, mediante la comunicación por escrito a los contactos que figuran a continuación. (Ver tambien Política de Privacidad).</p>
                            <img src="{{asset('iconos/pin.png')}}" class="img-responsive" width="50px" height="50px">
                        </div>
                    </div>


                    <hr class="secundario"/>

                    <div class="color3 png">
                        <p>Si desea más información sobre la protección de datos personales, póngase en contacto con CCL LOGISTICA, C.A. por medio de Carta Escrita dirigida a la siguiente dirección: <br/> <br/>

                            <img src="{{asset('iconos/placeholder.png')}}" class="img-responsive" width="50px" height="50px">&nbsp;Av.Sur 4, Edificio 9-1, Oficina 8, Catedral, Caracas, 1010-Distrito Capital, República Bolivariana de Venezuela <br/>
                            <img src="{{asset('iconos/smartphone.png')}}" class="img-responsive" width="50px" height="50px"><b>&nbsp;Telfs: (58)2125192951 (58)414.328.5453</b><br/>
                            <img src="{{asset('iconos/message.png')}}" class="img-responsive" width="50px" height="50px"><b>&nbsp;Email:</b> contacto@ccllogistica.com.ve </p>
                        <p class="color2"><b>www.ccllogistica.com.ve </b></p>
                    </div>

                    <hr/>

                    <div class="cl-md-9">
                        <div class="sub">
                            <h3><b>El Portal</b></h3>
                            <p>&nbsp;&nbsp;SUPERMARKET, es un portal, propiedad de la Sociedad Mercantil, CCL LOGISTICA, CA. Empresa legalmente constituida y que actúa bajo las Leyes de la República Bolivariana de Venezuela, empresa inscrita ante los registros y los órganos de registros exigibles. CCL LOGISTICA, tiene como actividad primaria el fomento a la producción agro-pecuaria, Distribución, Comercialización de Alimentos y Productos Agroindustriales, Logística Integral (Transporte Almacenaje), Importación y Exportación de Bienes en General. CCL LOGISTICA tiene por meta ofrecer a sus clientes, a través de SUPERMARKET, productos de primera necesidad de la canasta alimentaria nacional, de calidad intachable, así como toda clase de alimentos para los gustos más exigentes y primorosos del público en general.</p>
                        </div>
                    </div>

                    <hr class="terciario"/>

                    <div class="cl-md-9">
                        <div class="sub">
                            <h3><b>El Canal</b></h3>
                            <p>&nbsp;&nbsp;<b>SUPERMARKET CCL</b> es sobretodo un canal de comercialización, el medio preferencial a través del cual CCL LOGISTICA establece la conexión entre el usuario/cliente con la compañía, en una "relación cerrada, privada y de acceso restricto" condicionado a la aceptación y suscripción del PORTAL (Ver Términos y Condiciones). Para el acceso a los servicios ofertados en el portal y para el éxito de la relación a establecerse, se requiere información verás, comprobable e inequívoca en base a un trato que se quiere sincero, responsable, objetivo y con un deseo claro de servirle mejor. La empresa actuará de manera recíproca. Toda información pasada por el cliente y que no sea verificable será pasible de suspensión del acceso, de dicho usuario. Cliente inscrito nos permite crear productos y diseñar servicios de encuentro a las posibilidades, disponibilidad y deseos de cada uno de estos mismos usuarios/clientes propiciando de esa manera acercarnos exitosamente en la búsqueda de respuestas ajustadas a las necesidades de nuestros usuarios. El objetivo es muy claro y se resume a: ATENCION AL PUBLICO en base a OFERTA DE PRODUCTOS DE CALIDAD Y SERVICIOS A SU MEDIDA.</p>
                        </div>
                    </div>

                    <hr class="terciario"/>

                    <div class="cl-md-9">
                        <div class="sub">
                            <h3><b>Tratamiento de Datos</b></h3>
                            <p>&nbsp;&nbsp;Tanto <b>SUPERMARKET</b> como <b>CCL LOGISTICA</b> están sujetas a la reglas establecidas por la comunidad internacional en lo que respecta al uso y manejo de datos de terceros por vía digital. Nuestras prácticas se insertan en lo tecnológicamente exigible en el <b>COMERCIO ELECTRONICO</b> fiscalizado por los Organismos nacionales e internacionales que tienen voz sobre la materia. Nuestras prácticas son gratamente cuidadosas y la llevamos al extremo siempre que se trata de la privacidad de nuestros usuarios. (Políticas de Privacidad). Por ello, disponemos de un procedimiento que cumple con los más altos estándares de seguridad de información y seguiremos investigando los mejores procesos así como las mejores prácticas, buscando con ello evitar que los datos de nuestros usuarios caigan en manos ajenas a nuestra estructura empresarial, para fines distintos de los aquí anunciados.</p>
                        </div>
                    </div>

                    <hr class="terciario"/>

                    <div class="cl-md-9">
                        <div class="sub">
                            <h3><b>Seguridad</b></h3>
                            <p>&nbsp;&nbsp;Nuestros clientes podrán gozar de mucha tranquilidad, en lo que respecta al tratamiento de su información. CCL LOGISTICA, solo usa Servidores de Empresas Certificadas, que cumplen con todos los PROTOCOLOS DE INTERNET exigibles en el E-COMMERCE, reduciendo con ello la exposición de nuestros clientes ante situaciones de riesgo. En nuestro programa de seguridad incluimos alertas permanentes a nuestros clientes sobre el "comportamiento" de los programas malintencionados que son frecuentemente noticia, de modo que estén precavidos. Informamos regularmente a nuestros clientes, “tips” sobre la naturaleza de las comunicaciones que les enviamos de modo a que estos identifiquen fácilmente los mensajes malintencionados de terceros que podrán hacerse pasar por nosotros. (Políticas de Privacidad).</p>
                        </div>
                    </div>

                    <hr class="terciario"/>

                    <div class="cl-md-9">
                        <div class="sub">
                            <h3><b>Calidad de los Productos</b></h3>
                            <p>&nbsp;&nbsp;<b>CCL LOGISTICA, C.A.</b> pone a la disposición de sus clientes a través del portal SUPERMARK.COM.VE, productos de cosechas recientes, siempre frescos y de muy buena calidad. Dichos productos - Hortalizas, Verduras, Carnes y Cereales - son en su mayoría de origen controlado y provienen de las fincas de productores asociados UNIAGRO, así como de productores especialmente seleccionados para el suministro. Nuestra Filosofía es ofrecer productos cosechados directamente desde nuestras fincas, para la mesa de nuestros clientes, como el resultado de la mejor selección de nuestros Productores y empresas asociadas. CCL LOGISTICA, se hace responsable de los productos que comercializa, dentro de un proceso de control estricto antes de la entrega de los mismos a los clientes. Productos que no cumplan con la calidad exigible no serán entregados a los clientes.</p>
                        </div>
                    </div>

                    <hr class="terciario"/>

                    <div class="cl-md-9">
                        <div class="sub">
                            <h3><b>Productos de la Industria</b></h3>
                            <p>&nbsp;&nbsp;En esta relación de oferta de alimentos, es natural que los usuarios encuentren productos que no pertenecen a ninguno de los grupos antes mencionados. Se tratan de productos manufacturados y transformados por otras empresas de la industria nacional y de productos importados, sobre quienes CCL LOGISTICA, no tiene ningún control. El criterio, no obstante, será el mismo: la mejor selección a la mesa de nuestros clientes. Con el objetivo servirle mejor. CCL LOGISTICA comercializará bajo esquemas bien definidos, productos de la industria que no pertenecen a nuestra producción pero  CCL LOGISTICA, los escoge y los selecciona de entre las mejores de las zafras. CCL LOGISTICA no se hará responsable por los productos de la industria distribuídos por nosotros. No obstante, es importante aclarar que haremos todos esfuerzos para encontrarle resultados satisfactorios siempre que nuestros clientes se vean expuestos ante situaciones cuya responsabilidad recae sobre otras Plantas Procesadoras e Industriales.</p>
                        </div>
                    </div>

                    <hr class="terciario"/>

                    <div class="cl-md-9">
                        <div class="sub">
                            <h3><b>Responsabilidad Empresarial</b></h3>
                            <p>&nbsp;&nbsp;Todos los productos presentes en los catálogos son para la venta. CCL LOGISTICA, no promociona productos de difícil disposición, ni comercializa productos fuera de lo dispuesto en el PORTAL SUPERMARKET. Por ello venimos trabajando arduamente con todos los agentes del comercio de modo a que nos dispongan los productos de mayor escases y de difícil manufactura, teniendo en cuenta la coyuntura actual. Por políticas empresariales los productos comercializados en el portal tienen origen en el comercio formal, convencional. CCL LOGISTICA, no adquiere productos de empresas informales, ni estimula la economía paralela en la práctica del libre comercio, evitando con eso distorsionar el real sentido de lo que se quiere de una empresa responsable, en un comercio saludable que neutraliza la especulación. Los productos de mayor demanda y escases y los productos de venta libre nos proporcionan un manejo promedio satisfactorio, mediante una presentación única caracterizada por Kits, Cestas y Bultos. La idea es proporcionar siempre, precios adecuados y accesibles a nuestros clientes/asociados.</p>
                        </div>
                    </div>

                    <hr class="terciario"/>

                    <div class="cl-md-9">
                        <div class="sub">
                            <h3><b>Facturación</b></h3>
                            <p>&nbsp;&nbsp;Una vez terminada la operación, el cliente debe exigir su factura que en condiciones normales deberá corresponder a la totalidad de los productos adquiridos, más el IVA. Los COMBOS son facturados como un solo producto, pagando el cliente un solo precio por el mismo más el IVA. Lo mismo se aplica a las Cestas y Bultos. Entretanto los productos vendidos de manera individual, contrariamente a lo que sucede con los KITS, CESTAS Y BULTOS serán facturados en función del precio unitario del mismo. Una misma factura, podrá contener, Productos Sueltos, UN KIT, UNA CESTA y UN BULTO, simultáneamente no existiendo limitación alguna. Las facturas que por cualquier motivo no haya sido entregado al cliente en el momento en el que realiza su pago, están, dispuestos en su Cuenta/Cliente, por lo que él mismo siempre que lo necesite, podrá consultarlo y efectuar cualquier proceso de aclaratoria o reclamo, sin que esto le acaree costo alguno.</p>
                        </div>
                    </div>

                    <hr/>

                    <div class="col-md-4">
                        <div class="color3">
                            <h3>OBS</h3>
                            <p>Por razones estrictamente de logística de inicio de operaciones, nos vemos obligados a limitar la compra por persona a 2 COMBOS mensuales. Estamos programando producir en cantidades suficientes para que esta limitante sea levantada a la mayor brevedad. </p> <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="color3">
                            <h3>LUGAR DE ENTREGA</h3>
                            <p>PUNTO DE ENTREGA SUPERMARK: El lugar de entrega corresponde al punto donde CCL LOGISTICA, le hará la entrega de los bienes adquiridos, bien sea directamente la empresa en sus instalaciones, bien sea a través de empresas afiliadas al proyecto, logrando ambos conceptos ejercer el mismo valor a la hora de medir resultados o reclamos. Ese lugar o punto estará disponible en la página de modo  que el cliente en el momento de culminar su pedido pueda elegir el lugar que mejor le convenga.</p><br/><br/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="color3">
                            <h3>ENTREGA A DOMICILIO</h3>
                            <p>La entrega en Domicilio o Local de Trabajo, corresponde a despachos que se llevaran a cabo en un lugar determinado, distinto del PUNTO DE ENTREGA SUPERMARK. CCL LOGISTICA, está evaluando efectuar entregas a domicilio en un espectacular esquema de DELIVERY, con un costo fijo de Bs1.000, para entregas en las ciudades donde la empresa dispone de centro de distribución. Ese monto a pagar, le corresponde a un servicio adicional, por lo que deberá ser cancelado simultáneamente a la hora de realizar el pago de su pedido.</p>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="color4 png">
                            <hr class="linea2"/>
                            <h3>RESPONSABILIDAD EN LA ENTREGA</h3>
                            <p>&nbsp;&nbsp;Correrá por cuenta del cliente todos los gastos adicionales originados por cuenta de equívocos en la redacción incorrecta de la dirección de envió, por lo que le solicitamos a los clientes, mantener siempre actualizados sus datos personales de modo de evitar gastos innecesários. Los productos a entregarse estarán sujetos a confirmación y presencia del comprador en dicha dirección, en el día y hora pactados para la entrega, a menos que por motivos de fuerza mayor no pueda estar presente, para eso el cliente deberá enviarnos un correo a: <br/><br/>
                                <img src="{{asset('iconos/smartphone.png')}}" class="img-responsive" width="50px" height="50px">&nbsp;<b>SAC: ATENCION AL CLIENTE:</b> +58 212 519 2951/2982 <br/> <img src="{{asset('iconos/message.png')}}" class="img-responsive" width="50px" height="50px">&nbsp;<b>Email:</b> sac@ccllogistica.com.ve <br/><br/> o simplemente enviarnos un mensaje de texto a partir de su teléfono registrado en el sistema comunicándonos su ausencia forzada a <b>Cell: +58 414 328 5453.</b> <br/><br/>&nbsp;&nbsp; De no verificarse esta notificación, el cliente será responsable por los gastos generados por la entrega frustrada, en el valor de Mil Bolivares (Bs. 1.000,00)  tratándose de entrega local o el precio del flete correspondiente para otros tipos de entrega. De igual modo, el Cliente será el único responsable por la pérdida de los productos perecederos que no hayan sido entregados y que se dañen por su falta. Los demás productos serán guardados para que los retire en una próxima compra/pedido.
                            <hr class="linea" /> <hr class="linea" /></p>

                            <h3>PRODUCTOS PERECEDEROS</h3>

                            <P><b>VERDURAS:</b> Serán entregados al cliente en condiciones de perfecta higiene, envasado y frescura, de modo de mantenerle su buen estado hasta que el cliente llegue a su casa. <br/><br/> <b>CONGELADOS, CARNES Y EMBUTIDOS FRIOS:</b> Serán entregados en perfectas condiciones de empaquetado, protegidos por recipientes que retendrán los líquidos naturales en ese género de productos. Los envases en uso por CCL LOGISTICA, para la entrega de los perecederos, son de propiedad del cliente y le confieren protección al producto durante el tránsito/traslado, por un período de hasta 4 horas entre la recepción y la llegada a su casa. <hr class="linea" /></P>

                            <hr class="linea">


                            <h3>RECEPCIÓN</h3>
                            <p>Cuando se produzca la entrega de los productos, el cliente debe de revisar los mismos y verificar que todo esta conforme a su pedido. Productos en mal estado o en condiciones dudosas para el consumo, deben de ser rechazados antes de la recepción y/o aceptación; El cliente no debe recibir los productos que no correspondan a su pedido o que estén en estado dudoso de consumo solicitando de inmediato la reposición y remplazo del mismo.</p>

                            <h3>DEVOLUCIONES</h3>
                            <p>NO se aceptarán devoluciones de los productos perecederos una vez aceptado y llevado por el cliente. Los productos de mayor duración, también serán rechazados. La devolución de los productos no se aceptará una vez abierto el envase o consumido parcialmente por el cliente. (Ver Políticas de DEVOLUCION). Los productos sin condiciones de consumo o que las fechas de consumo estén expirados, son sujetos de devolución inmediata, deberán ser presentados íntegralmente con la factura de compra y sin que le ocurra ninguna disposición o consumo de sus partes.</p>
                            <hr class="linea2"/>

                        </div>

                    </div>
                </div>



    </div>
    </div>
    </div>
    </div>

@endsection