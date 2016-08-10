<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Repositories\Comment\CommentRepositoryInterface;
use App\Repositories\Entry\EntryRepositoryInterface;
use App\Http\Requests\CommentRequest;

class EntryCommentController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request, $id)
    {
        $entry = $this->entryRepository->find($id);
        $comment = [
            'user_id' => Auth::user()->id,
            'entry_id' => $entry->id,
            'comment' => $request->comment,
        ];
        $this->commentRepository->create($comment);
        return redirect()->route('user.entry.show', ['id' => $id]);
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
