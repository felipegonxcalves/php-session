<?php

// 1 par, tempo do cookie
// 2 par, url de acesso
//3 par, domínio
// 4 par, se true só é acessado se tiver https, se false pode ser acessado de http normal
// 5 par, http only
session_set_cookie_params(60*60, '/', null, false, true);

session_start();