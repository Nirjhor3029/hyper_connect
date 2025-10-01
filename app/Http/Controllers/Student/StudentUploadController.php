<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StudentUploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            // 'file' => 'required|mimes:jpeg,png,jpg,pdf|max:2048' // 2MB
            'file' => 'required|mimes:jpeg,png,jpg,pdf|max:10240', // 10MB
            'custom_name' => 'nullable|string|max:255'
        ]);

        $user = Auth::user();



        if (isset($user->email)) {
            $folder = "uploads/{$user->email}";
        } else if (isset($user->id)) {
            $folder = "uploads/{$user->id}";
        } else {
            $folder = "uploads";
        }



        // যদি custom_name থাকে তাহলে সেটাই নেব, না থাকলে original name
        $custom_name = $request->custom_name
            ? $request->custom_name . '.' . $request->file('file')->getClientOriginalExtension()
            : $request->file('file')->getClientOriginalName();

        $fileName = $request->file('file')->getClientOriginalName();

        $path = $request->file('file')->store($folder, 'public');
        // $path = $request->file('file')->storeAs($folder, $fileName, 'public');

        $fileSizeKB = round($request->file('file')->getSize() / 1024, 2);
        $fileType = $request->file('file')->getClientOriginalExtension();


        $upload = Upload::create([
            'student_id'   => isset($user->id) ? $user->id : null,
            'file_name' => $fileName,
            'file_custom_name' => $custom_name,
            'file_path' => $path,
            'file_size' => $fileSizeKB,
            'file_type' => $fileType
        ]);

        return response()->json([
            'id' => $upload->id,
            'user_id' => $upload->user_id,
            'file_name'  => $upload->file_name,
            'file_path'  => $upload->file_path,
            'file_size'  => $upload->file_size,
            'file_type'  => $upload->file_type,
            'uploaded_at' => now()->format('M d, Y')
        ]);
    }

    public function destroy($id)
    {
        $upload = Upload::findOrFail($id);

        // Delete file
        Storage::disk('public')->delete($upload->file_path);

        // Delete db record
        $upload->delete();

        return response()->json(['message' => 'File deleted successfully']);
    }
}
