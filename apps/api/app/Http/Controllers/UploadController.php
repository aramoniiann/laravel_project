<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function __invoke(
        UploadRequest $request
    ) {
        $path = $request->file('file')->store('uploads');
        $url = Storage::url($path);

        return [
            'path' => $path,
            'url' => $url,
        ];
    }
}
