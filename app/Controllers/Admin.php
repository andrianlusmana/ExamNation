<?php
namespace App\Controllers;

use App\Models\ExamModel;
use App\Models\UserModel;

class Admin extends BaseController
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function manageExam()
    {
        $examModel = new ExamModel();
        $data['exams'] = $examModel->findAll(); // Ambil semua data ujian dari database
        
        return view('admin/manage_exam', $data);
    }

    public function editExam($id)
{
    $examModel = new ExamModel();
    $data['exams'] = $examModel->find($id);

    if (!$data['exams']) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Ujian tidak ditemukan.');
    }

    return view('admin/edit_exam', $data);
}

public function updateExam($id)
{
    $examModel = new ExamModel();

    // Validasi input
    if (!$this->validate([
        'title' => 'required',
        'description' => 'required',
        'duration' => 'required|integer'
    ])) {
        return redirect()->back()->with('error', 'Semua field harus diisi dengan benar.');
    }

    // Update data ujian
    $examModel->update($id, [
        'title' => $this->request->getPost('title'),
        'description' => $this->request->getPost('description'),
        'duration' => $this->request->getPost('duration'),
    ]);

    return redirect()->to('/admin/manage_exam')->with('success', 'Ujian berhasil diperbarui.');
}


    public function manageUsers()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll(); // Ambil semua pengguna dari database

        return view('admin/manage_users', $data);
    }

    public function deleteUser($id)
    {
        $userModel = new UserModel();
        $userModel->delete($id);

        return redirect()->to('/admin/manage_users');
    }

    public function delete_exam($id) {
        $examModel = new ExamModel();
        if ($examModel->delete($id)) {
            return redirect()->to('admin/manage_exam')->with('success', 'Ujian berhasil dihapus');
        } else {
            return redirect()->to('admin/manage_exam')->with('error', 'Gagal menghapus ujian');
        }
    }
    
}


