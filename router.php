<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('welcome');
}
);

Route::get('/users/luka_mania/name', function () {
    return view('user1name',['name' => 'ლუკა']);
}
);

Route::get('/users/luka_mania/surname', function () {
    return view('user1surname',['surname' => 'მანია']);
}
);

Route::get('/users/luka_mania/bdate', function () {
    return view('user1bdate',['bdate' => '13/01/2003']);
}
);

Route::get('/users/luka_mania/weight', function () {
    return view('user1weight',['weight' => '82 კგ']);
}
);

Route::get('/users/luka_mania/height', function () {
    return view('user1height',['height' => '181 სანტიმეტრი']);
}
);
Route::post('/users/luka_mania/saved', function () {
    return view('user1saved',['text' => 'წარმატებით განახლდა']);
}
);
Route::put('users/luka_mania/putted', function () {
    return response()->json($array = [
                                "message" => "წარმატებით დაემატა"
    ]);
    
}
);
Route::delete('users/luka_mania/deleted', function () {
    return response()->json($array = [
                                "message" => "წარმატებით წაიშალა"
    ]);
    
}
);



