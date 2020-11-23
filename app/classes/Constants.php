<?php

class Constants
{
    ## HTTP Responses
    const HTTP_OK = 200;
    const HTTP_BAD_REQUEST = 400;
    const HTTP_UNAUTHORIZED = 401;
    const HTTP_FORBIDDEN = 403;
    const HTTP_NOT_FOUND = 404;
    const HTTP_UNSUPPORTED_MEDIA_TYPE = 415;

    ## Environments
    const ENV_LOC = 'loc';
    const ENV_PROD = 'prod';

    const ERROR_SUCCESS = 0;
    const ERROR_UNKNOWN = 1;
    const ERROR_USER_NOT_FOUND = 2;
    const ERROR_USER_DISABLED = 3;
    const ERROR_USER_COMPANY_SETUP = 4;
}
