<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

class Upload
{
    public function __invoke(Illuminate\Http\Request $request)
    {
        $file     = $request->profileImage;
        $fileName = (string) Str::orderedUuid()
            . "-" . Str::random(5)
            . "." . $file->getClientOriginalExtension();

        Storage::disk('s3_public')
            ->put("images/$fileName", file_get_contents($file));

        return response()->json([
            "status" => true,
        ], 200);
    }
}

Route::prefix("file-upload")
    ->name("file.upload.")
    ->group(function () {
        Route::post("/post", Upload::class)->name("post");
    });
