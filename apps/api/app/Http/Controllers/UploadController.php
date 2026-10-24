<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(UploadRequest $request): array
    {
        $path = $request->file('file')->store('uploads');

        return ['path' => $path];
    }
}
