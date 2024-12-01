<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ncWIqkiSGQD93tA5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
            'GET' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/answer-survey' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5Q6X9rHtnRWqJRMk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
            'GET' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/welcome/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5HxRTN5r7vGT4ebf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/welcome/admin/survey-responses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2Co3ta6TW4q0kT51',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/welcome/admin/account-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::II1fHC1ZE1dml8p5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/welcome/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dl8zcq1aD59gTVoj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/welcome/admin/my-account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3OHld2lLaQVwUg4g',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/welcome/superadmin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kjoy7JciWEsXIh4T',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/welcome/superadmin/survey-responses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5KV4xbWdkTKI7b8O',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/welcome/superadmin/user/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yCwvbDl4U28fTVbg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/welcome/superadmin/user/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3zGIEH3VKjreJ4A7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/welcome/superadmin/office/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0yojPE22IdH4cgvX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/welcome/superadmin/office/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fA3MZT9wqj3U1wrU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/welcome/superadmin/account-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JbLBwyFkC9GH6MR6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/welcome/superadmin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c0tlMRzETfFtj1Wn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/welcome/superadmin/my-account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yJZmtHmj4Lf7gdPC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/welcome/(?|admin/survey\\-responses/view\\.([^/]++)(*:57)|superadmin/(?|survey\\-responses/view\\.([^/]++)(*:110)|user/list/(?|update\\.([^/]++)(*:147)|remove\\.([^/]++)(*:171))|office/list/(?|update\\.([^/]++)(*:211)|remove\\.([^/]++)(*:235)))))/?$}sDu',
    ),
    3 => 
    array (
      57 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sEnY3tDS9w2XihgO',
          ),
          1 => 
          array (
            0 => 'survey_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      110 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6sBPUE0LxZzNcq7y',
          ),
          1 => 
          array (
            0 => 'survey_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      147 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZaoPANRiaqkVHPkH',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LK4ebcTa6hM8Zjgy',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      211 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4Uz4l2DIlYeInBYF',
          ),
          1 => 
          array (
            0 => 'office_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      235 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d1p53H7fooPyiJbc',
          ),
          1 => 
          array (
            0 => 'office_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ncWIqkiSGQD93tA5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000050b0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ncWIqkiSGQD93tA5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'GET',
        2 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Guest\\Login@login_user',
        'controller' => 'App\\Http\\Controllers\\Guest\\Login@login_user',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5Q6X9rHtnRWqJRMk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'GET',
        2 => 'HEAD',
      ),
      'uri' => 'answer-survey',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Guest\\AnswerTheSurvey@answer_this_survey',
        'controller' => 'App\\Http\\Controllers\\Guest\\AnswerTheSurvey@answer_this_survey',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5Q6X9rHtnRWqJRMk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5HxRTN5r7vGT4ebf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'welcome/admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminDashboard@dashboard',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminDashboard@dashboard',
        'namespace' => NULL,
        'prefix' => '/welcome/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::5HxRTN5r7vGT4ebf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2Co3ta6TW4q0kT51' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'welcome/admin/survey-responses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminSurveyResponse@survey_responses',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminSurveyResponse@survey_responses',
        'namespace' => NULL,
        'prefix' => 'welcome/admin/survey-responses',
        'where' => 
        array (
        ),
        'as' => 'generated::2Co3ta6TW4q0kT51',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sEnY3tDS9w2XihgO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'welcome/admin/survey-responses/view.{survey_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminSurveyResponse@survey_response',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminSurveyResponse@survey_response',
        'namespace' => NULL,
        'prefix' => 'welcome/admin/survey-responses',
        'where' => 
        array (
        ),
        'as' => 'generated::sEnY3tDS9w2XihgO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::II1fHC1ZE1dml8p5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'welcome/admin/account-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\UserAuditTrail@log',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\UserAuditTrail@log',
        'namespace' => NULL,
        'prefix' => '/welcome/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::II1fHC1ZE1dml8p5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dl8zcq1aD59gTVoj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'welcome/admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Logout@logout_user',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Logout@logout_user',
        'namespace' => NULL,
        'prefix' => '/welcome/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Dl8zcq1aD59gTVoj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3OHld2lLaQVwUg4g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'welcome/admin/my-account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\MyAccount@my_account',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\MyAccount@my_account',
        'namespace' => NULL,
        'prefix' => '/welcome/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::3OHld2lLaQVwUg4g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kjoy7JciWEsXIh4T' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'welcome/superadmin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminDashboard@dashboard',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminDashboard@dashboard',
        'namespace' => NULL,
        'prefix' => '/welcome/superadmin',
        'where' => 
        array (
        ),
        'as' => 'generated::Kjoy7JciWEsXIh4T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5KV4xbWdkTKI7b8O' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'welcome/superadmin/survey-responses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminSurveyResponse@survey_responses',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminSurveyResponse@survey_responses',
        'namespace' => NULL,
        'prefix' => 'welcome/superadmin/survey-responses',
        'where' => 
        array (
        ),
        'as' => 'generated::5KV4xbWdkTKI7b8O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6sBPUE0LxZzNcq7y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'welcome/superadmin/survey-responses/view.{survey_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminSurveyResponse@survey_response',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminSurveyResponse@survey_response',
        'namespace' => NULL,
        'prefix' => 'welcome/superadmin/survey-responses',
        'where' => 
        array (
        ),
        'as' => 'generated::6sBPUE0LxZzNcq7y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yCwvbDl4U28fTVbg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'welcome/superadmin/user/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminUser@userList',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminUser@userList',
        'namespace' => NULL,
        'prefix' => 'welcome/superadmin/user',
        'where' => 
        array (
        ),
        'as' => 'generated::yCwvbDl4U28fTVbg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3zGIEH3VKjreJ4A7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'welcome/superadmin/user/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminUser@newUser',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminUser@newUser',
        'namespace' => NULL,
        'prefix' => 'welcome/superadmin/user',
        'where' => 
        array (
        ),
        'as' => 'generated::3zGIEH3VKjreJ4A7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZaoPANRiaqkVHPkH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'welcome/superadmin/user/list/update.{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminUser@editUser',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminUser@editUser',
        'namespace' => NULL,
        'prefix' => 'welcome/superadmin/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ZaoPANRiaqkVHPkH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LK4ebcTa6hM8Zjgy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'welcome/superadmin/user/list/remove.{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminUser@removeUser',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminUser@removeUser',
        'namespace' => NULL,
        'prefix' => 'welcome/superadmin/user',
        'where' => 
        array (
        ),
        'as' => 'generated::LK4ebcTa6hM8Zjgy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0yojPE22IdH4cgvX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'welcome/superadmin/office/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminOffice@officeList',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminOffice@officeList',
        'namespace' => NULL,
        'prefix' => 'welcome/superadmin/office',
        'where' => 
        array (
        ),
        'as' => 'generated::0yojPE22IdH4cgvX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fA3MZT9wqj3U1wrU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'welcome/superadmin/office/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminOffice@newOffice',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminOffice@newOffice',
        'namespace' => NULL,
        'prefix' => 'welcome/superadmin/office',
        'where' => 
        array (
        ),
        'as' => 'generated::fA3MZT9wqj3U1wrU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4Uz4l2DIlYeInBYF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'welcome/superadmin/office/list/update.{office_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminOffice@editOffice',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminOffice@editOffice',
        'namespace' => NULL,
        'prefix' => 'welcome/superadmin/office',
        'where' => 
        array (
        ),
        'as' => 'generated::4Uz4l2DIlYeInBYF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d1p53H7fooPyiJbc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'welcome/superadmin/office/list/remove.{office_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminOffice@removeOffice',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Superadmin\\SuperAdminOffice@removeOffice',
        'namespace' => NULL,
        'prefix' => 'welcome/superadmin/office',
        'where' => 
        array (
        ),
        'as' => 'generated::d1p53H7fooPyiJbc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JbLBwyFkC9GH6MR6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'welcome/superadmin/account-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\UserAuditTrail@log',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\UserAuditTrail@log',
        'namespace' => NULL,
        'prefix' => '/welcome/superadmin',
        'where' => 
        array (
        ),
        'as' => 'generated::JbLBwyFkC9GH6MR6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c0tlMRzETfFtj1Wn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'welcome/superadmin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Logout@logout_user',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Logout@logout_user',
        'namespace' => NULL,
        'prefix' => '/welcome/superadmin',
        'where' => 
        array (
        ),
        'as' => 'generated::c0tlMRzETfFtj1Wn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yJZmtHmj4Lf7gdPC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'welcome/superadmin/my-account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\MyAccount@my_account',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\MyAccount@my_account',
        'namespace' => NULL,
        'prefix' => '/welcome/superadmin',
        'where' => 
        array (
        ),
        'as' => 'generated::yJZmtHmj4Lf7gdPC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
