<?php

namespace App\Http\Controllers\User;

use App\Repositories\Comment\CommentRepositoryInterface;
use App\Repositories\Entry\EntryRepositoryInterface;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\EntryRequest;


class EntryController extends Controller
{
    private $entryRepository;
    private $commentRepository;

    public function __construct(EntryRepositoryInterface $entryRepository, CommentRepositoryInterface $commentRepository)
    {
        $layout = config('common.layouts.login.default');
        parent::__construct($layout);
        $this->entryRepository = $entryRepository;
        $this->commentRepository = $commentRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entries = $this->entryRepository->paginate(config('common.paginate'));
        return view('entry.index', compact('entries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entry.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EntryRequest $request)
    {
        $entry = $request->only('title', 'body');
        $entry['user_id'] = Auth::user()->id;
        $data = $this->entryRepository->create($entry);
        if (!$data) {
            return redirect()->route('user.users.index')
                ->withErrors(['message' => trans('entry.not_found')]);
        }
        return redirect()->route('user.entry.index')->withSuccess(trans('session.entry_create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entry = $this->entryRepository->find($id);
        $comments = $this->commentRepository->showComment($id);
        return view('entry.show', compact('entry', 'comments'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
