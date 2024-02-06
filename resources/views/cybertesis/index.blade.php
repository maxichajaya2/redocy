@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Columna izquierda -->
            <div class="col-md-4">
                <!-- Primer card en la izquierda -->
                <div class="card mb-4">
                    <div class="card-body">
                        <!-- Contenido del primer card -->
                        <h2>Información del Estudiante</h2>
                        <ul>
                            <li><strong>Nombre:</strong> Pérez Diaz, Juan Pablo</li>
                            <li><strong>Rol:</strong> Estudiante</li>
                            <li><strong>Código:</strong> 20200020</li>
                            <li><strong>Facultad:</strong> 20- Ingeniería de Sistemas e Informática</li>
                            <li><strong>Programa:</strong> 2 - E.P. de Ingeniería de Software</li>
                            <li><strong>Especialidad:</strong> 0 - Estudios Generales</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Columna medio -->
            <div class="col-md-4">
                <!-- Primer card en la derecha -->
                <div class="card">
                    <div class="card-body">
                        <h2>Información</h2>
                        <ul>
                            <li><a href="#">Guías y Formatos</a></li>
                            <li><a href="#">Ejemplos de carátulas</a></li>
                            <li><a href="#">Guía de creación del perfil ORCID</a></li>
                            <li><a href="#">Tablas de disciplinas OCDE</a></li>
                            <li><a href="#">Formatos de hojas de metadatos</a></li>
                            <li><a href="#">Fe de erratas</a></li>
                            <li><a href="#">Autorización para el depósito de obra en Cybertesis UNMSM</a></li>
                            <li><a href="#">Solicitud de postergación</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Segundo card en la derecha -->
                <div class="card">
                    <div class="card-body">
                        <h2>Errores comunes que NO debes cometer</h2>
                        <ul>
                            <li><strong>NO enviar los documentos en otro formato que no sea PDF editable.</strong></li>
                            <li><strong>NO escanear mal el contenido, sin fondo blanco.</strong></li>
                            <li><strong>NO enviar el certificado de similitud sin la firma del asesor.</strong></li>
                            <li><strong>NO enviar solo los resultados del Turnitin, enviar el reporte.</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Columna derecha -->
            <div class="col-md-4">
                <!-- Primer card en la derecha -->
                <div class="card">
                    <div class="card-body">
                        <!-- Contenido del primer card en la derecha -->
                        <h2>Información</h2>
                        <ul>
                            <li><strong>¿Qué archivos debo subir?</strong></li>
                            <ul>
                                <li>Tesis o correspondiente.</li>
                                <li>Acta de sustentación.</li>
                                <li>Certificado de similitud.</li>
                                <li>Autorización para el depósito de obra en Cybertesis.</li>
                                <li>Hoja de metadatos complementarios.</li>
                                <li>Reporte de Turnitin.</li>
                            </ul>
                            <li><strong>Si desea postergación, adjuntar también:</strong></li>
                            <ul>
                                <li>Solicitud de postergación.</li>
                            </ul>
                        </ul>
                    </div>
                </div>

                <!-- Segundo card en la derecha -->
                <div class="card">
                    <div class="card-body">
                        <!-- Contenido del segundo card en la derecha -->
                        <h2>Tipos de Solicitud</h2>
                        <ul>
                            <li><strong>Solicitud convencional:</strong> Se realiza el proceso normal.</li>
                            <li><strong>Solicitud postergación:</strong> Publicación privada hasta 24 meses, debidamente
                                justificado.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
