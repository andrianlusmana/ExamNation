<?php
namespace App\Controllers;

use App\Models\ExamModel;
use App\Models\QuestionModel;
use App\Models\ResultModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Peserta extends BaseController
{
    public function dashboard()
    {
        // Load session
        $session = session();

        // Periksa apakah user sudah login
        if (!$session->has('user_id')) {
            return redirect()->to('/login');
        }

        // Ambil data ujian dari database
        $examModel = new ExamModel();
        $exams = $examModel->findAll();

        // Kirim data ke view
        return view('peserta/dashboard', [
            'session' => $session,
            'exams' => $exams
        ]);
    }

    public function startExam($examId)
    {
        $examModel = new ExamModel();
        $questionModel = new QuestionModel();

        $exam = $examModel->find($examId);
        if (!$exam) {
            throw PageNotFoundException::forPageNotFound();
        }

        $questions = $questionModel->where('exam_id', $examId)->findAll();

        return view('peserta/exam_view', [
            'exam' => $exam,
            'questions' => $questions
        ]);
    }

    public function exam($id)
    {
        $examModel = new ExamModel();
        $questionModel = new QuestionModel();

        $exam = $examModel->find($id);
        if (!$exam) {
            throw PageNotFoundException::forPageNotFound();
        }

        $questions = $questionModel->where('exam_id', $id)->findAll();

        return view('peserta/exam', [
            'exam' => $exam,
            'questions' => $questions
        ]);
    }

    public function submitExam()
    {
        $questionModel = new QuestionModel();
        $resultModel = new ResultModel();

        $examId = $this->request->getPost('exam_id');
        $answers = $this->request->getPost('answers');

        $correctCount = 0;
        $totalQuestions = count($answers);

        foreach ($answers as $questionId => $selectedOption) {
            $question = $questionModel->find($questionId);
            if ($question && strtoupper($selectedOption) === strtoupper($question['correct_option'])) {
                $correctCount++;
            }
        }

        $score = ($correctCount / $totalQuestions) * 100;

        // Simpan hasil ke database
        $resultModel->insert([
            'exam_id' => $examId,
            'user_id' => session()->get('user_id'), 
            'score' => $score,
            'taken_at' => date('Y-m-d H:i:s')
        ]);

        // Langsung tampilkan hasil setelah submit
        return view('peserta/result', [
            'examTitle' => (new ExamModel())->find($examId)['title'],
            'score' => $score,
            'correctCount' => $correctCount,
            'totalQuestions' => $totalQuestions,
        ]);
    }

    public function result($examId)
{
    $resultModel = new ResultModel();
    $session = session();
    $userId = $session->get('user_id');

    $data['results'] = $resultModel->where('exam_id', $examId)
                                   ->where('user_id', $userId)
                                   ->findAll();

    return view('peserta/result', $data);
}


    public function showResult()
    {
        return view('peserta/result');
    }
}