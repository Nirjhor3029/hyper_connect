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
            'custom_name' => 'nullable|string|max:255',
            'file_name' => 'nullable|string|max:255'
        ]);

        // return response()->json([
        //     'message' => 'File uploaded successfully.',
        //     'data' => $request->all()
        // ], 200);

        $user = Auth::user();



        if (isset($user->email)) {
            $folder = "uploads/{$user->email}";
        } else if (isset($user->id)) {
            $folder = "uploads/{$user->id}";
        } else {
            $folder = "uploads";
        }


        $input_name = $request->input('file_name') ?? null;
        $sub_folder = $this->getSubFolderName($input_name);

        if ($input_name && $sub_folder) {
            $folder = $folder . '/' . $sub_folder;
        }

        // return response()->json([
        //     'status' => 200,
        //     'folder' => $folder
        // ]);



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
            'input_name'   => $request->input('file_name') ?? null,
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

    public function getSubFolderName($input_name)
    {
        $subFolder = '';
        switch ($input_name) {
            case 'passport-front':
                $subFolder = 'passport';
                break;
            case 'passport-full':
                $subFolder = 'passport';
                break;
            case 'photo-own':
                $subFolder = 'photo';
                break;
            case 'academic-certificates':
                $subFolder = 'academic-certificates';
                break;
            case 'language-certificates-ielts':
                $subFolder = 'language-certificates';
                break;
            case 'language-certificates-moi':
                $subFolder = 'language-certificates';
                break;
            case 'language-certificates-pte':
                $subFolder = 'language-certificates';
                break;
            case 'language-certificates-others':
                $subFolder = 'language-certificates';
                break;
            case 'personal-attachments':
                $subFolder = 'personal-attachments';
                break;
            case 'other-documents':
                $subFolder = 'other-documents';
                break;
            case 'pay-slip':
                $subFolder = 'pay-slip';
                break;
            default:
                $subFolder = null;
                break;
        }
        return $subFolder;
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
