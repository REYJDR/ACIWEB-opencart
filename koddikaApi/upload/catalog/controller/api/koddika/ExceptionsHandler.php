<?PHP



trait ExceptionsHandler {


    public static function setUserErrorAdvice(){

        set_error_handler([ExceptionsHandler::class, "anyError"],E_NOTICE|E_ALL);
    
    }

    /* Error Handling Function */
    public static function anyError($errNo, $errStr, $errFile, $errLine,$errContext) {


       throw new Exception('['.$errNo.']['.$errFile.']['.$errLine.']['.$errStr.']');
        

    }

    public function ConsultResponse($code=0, $message="" , $die = false) {
        
        
        $status = $this->CodeMessages($code);
    
        $response['code']     = $code;
        $response['status']   = $status;
        $response['message']  = $message;
    
    
        $headerCode = $_SERVER["SERVER_PROTOCOL"].' '.$code.' '.$status;
        
        header($headerCode);
    
            if($die){
                echo  json_encode($response,JSON_PRETTY_PRINT);
                die();
            }
            return  json_encode($response,JSON_PRETTY_PRINT);
    }

    
    public function CodeMessages($code){
    
    
        $message = [ 
                    //2xx: Success
                    200 => 'Success',
                    201 => 'Created',
                    202 => 'Accepted',
                    203 => 'Non-Authoritative Information', // since HTTP/1.1
                    204 => 'No Content',
                    205 => 'Reset Content',
                    206 => 'Partial Content',
                    207 => 'Multi-Status', // WebDAV; RFC 4918
                    208 => 'Already Reported', // WebDAV; RFC 5842
                    226 => 'IM Used', // RFC 3229
    
    
                    //3xx: Redirection - Further action must be taken in order to complete the request
                    
                    300 => 'Multiple Choices',
                    301 => 'Moved Permanently',
                    302 => 'Found',
                    303 => 'See Other', // since HTTP/1.1
                    304 => 'Not Modified',
                    305 => 'Use Proxy', // since HTTP/1.1
                    306 => 'Switch Proxy',
                    307 => 'Temporary Redirect', // since HTTP/1.1
                    308 => 'Permanent Redirect', // approved as experimental RFC
                    310 => 'Configuration error' ,
                    
                    //4xx: Client Error - The request contains bad syntax or cannot be fulfilled
                    
                    400 => 'Bad Request',
                    401 => 'Unauthorized',
                    402 => 'Payment Required',
                    403 => 'Forbidden',
                    404 => 'Not Found',
                    405 => 'Method Not Allowed',
                    406 => 'Not Acceptable',
                    407 => 'Proxy Authentication Required',
                    408 => 'Request Timeout',
                    409 => 'Conflict',
                    410 => 'Gone',
                    411 => 'Length Required',
                    412 => 'Precondition Failed',
                    413 => 'Request Entity Too Large',
                    414 => 'Request-URI Too Long',
                    415 => 'Unsupported Media Type',
                    416 => 'Requested Range Not Satisfiable',
                    417 => 'Expectation Failed',
                    418 => 'I\'m a teapot', // RFC 2324
                    
    
                    419 => 'AWS Storage error', //Error al obtener o depositar archivos en el storage de AWS
                    420 => 'Missing user master data',//Falta configuracion de FE para para el usuario
                    421 => 'FE Duplicated',//Falta configuracion de FE para para el usuario
    
                    422 => 'Unprocessable Entity', // WebDAV; RFC 4918
                    423 => 'Locked', // WebDAV; RFC 4918
                    424 => 'Failed Dependency', // WebDAV; RFC 4918
                    424 => 'Method Failure', // WebDAV)
                    425 => 'Unordered Collection', // Internet draft
                    426 => 'Upgrade Required', // RFC 2817
                    428 => 'Precondition Required', // RFC 6585
                    429 => 'Too Many Requests', // RFC 6585
                    431 => 'Request Header Fields Too Large', // RFC 6585
                    444 => 'No Response', // Nginx
                    449 => 'Retry With', // Microsoft
                    450 => 'Blocked by Windows Parental Controls', // Microsoft
                    451 => 'Redirect', // Microsoft
                    451 => 'Unavailable For Legal Reasons', // Internet draft
                    494 => 'Request Header Too Large', // Nginx
                    495 => 'Cert Error', // Nginx
                    496 => 'No Cert', // Nginx
                    497 => 'HTTP to HTTPS', // Nginx
                    499 => 'Client Closed Request', // Nginx
                    
                    //5xx: Server Error - The server failed to fulfill an apparently valid request
    
    
                    //5xx: Server Error - The server failed to fulfill an apparently valid request
                    500 => 'Internal Server Error',
                    501 => 'Not Implemented',
                    502 => 'Bad Gateway',
                    503 => 'Service Unavailable',
                    504 => 'Gateway Timeout',
                    505 => 'HTTP Version Not Supported',
                    506 => 'Variant Also Negotiates', // RFC 2295
                    507 => 'Insufficient Storage', // WebDAV; RFC 4918
                    508 => 'Loop Detected', // WebDAV; RFC 5842
                    509 => 'Bandwidth Limit Exceeded', // Apache bw/limited extension
                    510 => 'Not Extended', // RFC 2774
                    511 => 'Network Authentication Required', // RFC 6585
                    513 => 'DGI WS Comunication error', // Error http en servidor destino, supone activacion de contingencia
                    514 => 'Certification error'  ,      // Error con certifcaco de comunicacion con DGI
                    514 => 'CURL error response '        // Error con certifcaco de comunicacion con DGI
                    
    
                    
                    ];
    
        return $message[$code];
    
    
    
    }
    
    
}

