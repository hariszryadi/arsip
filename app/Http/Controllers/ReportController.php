<?php

namespace App\Http\Controllers;

use App\Exports\ArchivesVitalExport;
use App\Models\ArchiveCreator;
use App\Models\Archives;
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
