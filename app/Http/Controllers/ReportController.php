<?php

namespace App\Http\Controllers;

use App\Exports\ArchivesVitalExport;
use App\Models\ArchiveCreator;
use App\Models\Archives;
use App\Models\Guest;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\DataTables;

class ReportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function report_archive_vital()
    {
        $creator = ArchiveCreator::orderBy('id')->get();

        $query = Archives::with('mapping')->where('status', '3');

        if (request()->filter_creator != null) {
            $query->where('archive_creator_id', request()->filter_creator);
        }

        if (request()->filter_year != null) {
            $query->where('year', request()->filter_year);
        }

        $query->orderBy('id')->get();

        if (request()->ajax()) {
            return DataTables::of($query)
                ->editColumn('amount', function($data) {
                    return $data->amount . ' Folder';
                })
                ->editColumn('dev_level', function($data) {
                    return $this->get_dev_level($data->dev_level);
                })
                ->editColumn('rack', function($data) {
                    return 'R.' . $data->rack->floor . '.' . $data->rack->type . '.' . $data->rack->no_rack;
                })
                ->make(true);
        }

        return view('report.archive-vital.index', compact('creator'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function report_archive_static()
    {
        $creator = ArchiveCreator::orderBy('id')->get();

        $query = Archives::with('mapping')->where('status', '1');

        if (request()->filter_creator != null) {
            $query->where('archive_creator_id', request()->filter_creator);
        }

        if (request()->filter_year != null) {
            $query->where('year', request()->filter_year);
        }

        $query->orderBy('id')->get();

        if (request()->ajax()) {
            return DataTables::of($query)
                ->editColumn('amount', function($data) {
                    return $data->amount . ' Folder';
                })
                ->editColumn('dev_level', function($data) {
                    return $this->get_dev_level($data->dev_level);
                })
                ->editColumn('rack', function($data) {
                    return 'R.' . $data->rack->floor . '.' . $data->rack->type . '.' . $data->rack->no_rack;
                })
                ->make(true);
        }

        return view('report.archive-static.index', compact('creator'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function report_archive_inactive()
    {
        $creator = ArchiveCreator::orderBy('id')->get();

        $query = Archives::with('mapping')->where('status', '2');

        if (request()->filter_creator != null) {
            $query->where('archive_creator_id', request()->filter_creator);
        }

        if (request()->filter_year != null) {
            $query->where('year', request()->filter_year);
        }

        $query->orderBy('id')->get();

        if (request()->ajax()) {
            return DataTables::of($query)
                ->editColumn('amount', function($data) {
                    return $data->amount . ' Folder';
                })
                ->editColumn('dev_level', function($data) {
                    return $this->get_dev_level($data->dev_level);
                })
                ->editColumn('rack', function($data) {
                    return 'R.' . $data->rack->floor . '.' . $data->rack->type . '.' . $data->rack->no_rack;
                })
                ->make(true);
        }

        return view('report.archive-inactive.index', compact('creator'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function report_guest()
    {

        $query = Guest::orderBy('id');

        if (request()->type != null) {
            if (request()->type == 'static') {
                $query->whereNotNull('static');
            }

            if (request()->type == 'inactive') {
                $query->whereNotNull('inactive');
            }
        }
        if (request()->start_date != null) {
            $start_date = date('Y-m-d', strtotime(request()->start_date));
            $query->whereDate('created_at', '>=', $start_date);
        }

        if (request()->end_date != null) {
            $end_date = date('Y-m-d', strtotime(request()->end_date));
            $query->whereDate('created_at', '<=', $end_date);
        }

        $query->get();

        if (request()->ajax()) {
            return DataTables::of($query)
                ->editColumn('static', function($data) {
                    if ($data->static != null) {
                        return '√';
                    }
                })
                ->editColumn('inactive', function($data) {
                    if ($data->inactive != null) {
                        return '√';
                    }
                })
                ->editColumn('created_at', function($data) {
                    $date = $data->created_at;
                    $date->settings(['formatFunction' => 'translatedFormat']);
                    return $date->format('j F Y');
                })
                ->rawColumns(['static', 'inactive'])
                ->make(true);
        }

        return view('report.guest.index');
    }

    /**
     * Get description development level
     * 
     * @param String $dev_level
     */
    private function get_dev_level($dev_level) {
        switch ($dev_level) {
            case '1':
                return 'Asli';
                break;
            case '2':
                return 'Copy';
                break;
            case '3':
                return 'Salinan';
                break;
            case '4':
                return 'Pertinggal';
                break;
            case '5':
                return 'Asli/Copy';
                break;
            
            default:
                return '-';
                break;
        }
    }
}
