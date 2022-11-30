<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\DataTables;
use App\Models\User;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Folder views
     */
    protected $_view = 'user.';
    
    /**
     * Route index
     */
    protected $_route = 'user.index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('permission:user-list', ['only' => ['index']]);
        $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            return DataTables::of(User::with('roles')->orderBy('id')->get())
                ->editColumn('created_at', function($data) {
                    $date = $data->created_at;
                    return $date->format('Y-m-d');
                })
                ->addColumn('action', function($data){
                    if ($data->email == 'superadmin@arsip.id') {
                        $disabled = 'disabled';
                        $text = 'text-secondary';
                    } else {
                        $disabled = '';
                        $text = 'text-danger';
                    }

                    $permission = '';
                    if (auth()->user()->can('user-edit')) {
                        $permission .= '<a href="'.route('user.edit', $data->id).'" class="dropdown-item"><i class="icon-pencil5 text-primary"></i> Edit</a>';
                    }
                    if (auth()->user()->can('user-delete')) {
                        $permission .= '<a href="javascript:void(0)" id="delete" data-id="'.$data->id.'" class="dropdown-item" '.$disabled.'><i class="icon-bin '.$text.'"></i> Hapus</a>';
                    }

                    if (auth()->user()->can('user-edit') || auth()->user()->can('user-delete')) {
                        return '<div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>
    
                                        <div class="dropdown-menu dropdown-menu-right">
                                            '.$permission.'
                                        </div>
                                    </div>
                                </div>';
                    }
                })
                ->make(true);
        }

        return view($this->_view.'index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::orderBy('id')->get();
        return view($this->_view.'create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'username' => 'unique:users',
            'password' => 'required|confirmed',
            'role' => 'required'
        ]);

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatar', ['disk' => 'public']);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'avatar' => $path
        ]);

        $role = Role::find($request->role);
        $user->assignRole($role);

        return redirect()->route($this->_route)->with('success', 'Data user berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $role = Role::orderBy('id')->get();
        return view($this->_view.'edit', compact('user', 'role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,'.$id,
            'username' => 'unique:users,username,'.$id,
        ]);

        if ($request->password != '') {
            $this->validate($request, [
                'password' => 'confirmed'
            ]);

            $user = User::find($id);
            $path = '';
            if ($request->hasFile('avatar')) {
                $path = \storage_path('app/public/' . $user->avatar);
                File::delete($path);
    
                $path = $request->file('avatar')->store('avatar', ['disk' => 'public']);
            } else {
                $path = $user->avatar;
            }
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'avatar' => $path
            ]);
        } else {
            $user = User::find($id);
            $path = '';
            if ($request->hasFile('avatar')) {
                $path = \storage_path('app/public/' . $user->avatar);
                File::delete($path);
    
                $path = $request->file('avatar')->store('avatar', ['disk' => 'public']);
            } else {
                $path = $user->avatar;
            }
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'avatar' => $path
            ]);
        }

        $role = Role::find($request->role);
        $user->syncRoles($role);

        return redirect()->route($this->_route)->with('success', 'Data user berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['success' => 'Data user berhasil dihapus']);
    }
}
