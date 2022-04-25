<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWebScrapperRequest;
use App\Http\Requests\UpdateWebScrapperRequest;
use App\Models\WebScrapper;
use Goutte\Client;


class WebScrapperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Goutte client instantiated
        $crawler = new Client();
        $crawler->request('GET', 'http://local.scrapper.com/');


        //adding crawled urls to array
        $crawledData[] = $crawler->getCrawler()->filter('.url')->each(function ($node) {
            return $node->text();
        });

        return view('scrapper')->with('crawledData', $crawledData);

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
     * @param  \App\Http\Requests\StoreWebScrapperRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWebScrapperRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WebScrapper  $webScrapper
     * @return \Illuminate\Http\Response
     */
    public function show(WebScrapper $webScrapper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebScrapper  $webScrapper
     * @return \Illuminate\Http\Response
     */
    public function edit(WebScrapper $webScrapper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWebScrapperRequest  $request
     * @param  \App\Models\WebScrapper  $webScrapper
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWebScrapperRequest $request, WebScrapper $webScrapper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebScrapper  $webScrapper
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebScrapper $webScrapper)
    {
        //
    }
}
