<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Models\backend\Financetotals;
use App\Models\backend\Financetotals as BackendFinancetotals;
use App\Models\frontend\financetwos_images;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FinancetotalsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financetotals = BackendFinancetotals::query()->join('users', 'users.id', '=', 'financetotals.user_id')->select(
            'financetotals.*',
            'users.full_name_tr'
        )->get();
        return view('backend.financetotals.index', compact('financetotals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('backend.financetotals.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $total = BackendFinancetotals::query()->select(DB::raw('total + ' . $request->financetotals . ' AS total'))->orderByDesc('id')->first();

        // Start of Upload Files
        if ($request->hasFile('f_image')) {
            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload
            $path = $request->file('f_image')->move('public/uploads/financetotals', $fileNameToStore);
        } else {
            $fileNameToStore = 'f_image.jpg';
        }

        $financetotals = new BackendFinancetotals();
        $financetotals->date = $request->date;
         //$financetotals->total = $total->total ?? $request->financetotals;
        $financetotals->user_id = $request->user;
        $financetotals->description = $request->description;
         $financetotals->f_image =  $fileNameToStore;

         $financetotals->save();
        // Start of Upload Files
        if ($request->hasFile('financetwos_images')) {
            $all_images = $request->file('financetwos_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $financetwos_images = new financetwos_images;
                $financetwos_images->financeone_id = $financetotals->id;
                $financetwos_images->financeone_image_path = $image_name;
                $financetwos_images->save();
                dd($financetwos_images);
            }
        }

        return redirect(route('admin.financetotals.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Admin\Model\slider $slider
     * @return \Illuminate\Http\Response
     */
    public function show(BackendFinancetotals $financetotals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Admin\Model\slider $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $financetotals = BackendFinancetotals::find($id);
//dd(compact('financetotals', 'users'));
        return view('backend.financetotals.edit', compact('financetotals', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Admin\Model\financetotals $financetotals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // End of Upload Files
        $financetotals = financetotals::find($id);
        //   $post->image = $imageUrl;



        // Start of Upload Files
        // file upload
        if ($request->hasFile('f_image')) {
            $postx = financetotals::find($id);  // here to store image alone
            // Delete a style_logo_en photo
            if ($postx->f_image != "") {
                unlink('public/uploads/financetotals/' . $postx->f_image);
            }

            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload

            $path = $request->file('f_image')->move('public/uploads/financetotals', $fileNameToStore);

            $postx->f_image = $fileNameToStore;
            $postx->save();
        }
        $financetotals = BackendFinancetotals::find($id);
        $financetotals->date = $request->date;
         //$total = BackendFinancetotals::query()->select(DB::raw('SUM(financetotals) + ' . $request->financetotals . ' AS total'))->groupBy('id')->orderByDesc('id')->whereNotIn('id', [$id])->first();
        //$financetotals->total = $total->total ?? $request->financetotals;
         $financetotals->user_id = $request->user;
        $financetotals->description = $request->description;
        $financetotals->save();
        // Start of Upload Files
        if ($request->hasFile('post_images')) {
            $all_images = $request->file('post_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $financetwos_images = new financetwos_images;
                $financetwos_images->financeone_id = $id;
                $financetwos_images->financeone_image_path = $image_name;
                $financetwos_images->save();
            }
        }
        return redirect(route('admin.financetotals.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Admin\Model\financetotals $financetotals
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $financetotals = BackendFinancetotals::find($id);
        $financetotals->delete();
        return redirect()->back()->with('message', 'financetotals Deleted Successfully');
    }
}