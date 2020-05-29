<?php

namespace App\Http\Controllers\Exam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * List of Reimburesement Request | Status Of Reimburesement
     * @param JSON
     * @return RESPONSE
     */
    public function index()
    {
        $btnDetail = '<button type="button" class="btn btn-primary mb-1"><i class="simple-icon-layers"></i> Detail</button>';
        $badgeApprove= '<span class="badge badge-pill badge-primary mb-1">Approve</span>';
        $badgeWaiting= '<span class="badge badge-pill badge-secondary mb-1">Waiting</span>';
        $badgeReject= '<span class="badge badge-pill badge-danger mb-1">Reject</span>';
        $badgeDraft= '<span class="badge badge-pill badge-light mb-1">Draft</span>';

        $data = [
            ['name' => 'Bakhtiar Irwansyah', 'date' => '1 Agustus 2020 - 4 Agustus 2020',  'total' => 'Rp. 150.000,-', 'status' => $badgeApprove, 'action' => $btnDetail],
            ['name' => 'Bakhtiar Irwansyah', 'date' => '2 September 2020 - 2 September 2020',  'total' => 'Rp. 220.000,-', 'status' => $badgeWaiting, 'action' => $btnDetail],
            ['name' => 'Bakhtiar Irwansyah', 'date' => '5 September 2020 - 6 September 2020',  'total' => 'Rp. 325.000,-', 'status' => $badgeReject, 'action' => $btnDetail],
            ['name' => 'Bakhtiar Irwansyah', 'date' => '1 Oktober 2020 - 10 Nopember 2020',  'total' => 'Rp. 450.000,-', 'status' => $badgeDraft, 'action' => $btnDetail],
        ];

        $renderData = [
            'title' => 'Data - Reimburesement',
            'data' => $data,
        ];

        return view('exam.exam',$renderData);
    }
}
