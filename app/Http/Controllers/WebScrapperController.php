<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWebScrapperRequest;
use App\Http\Requests\UpdateWebScrapperRequest;
use App\Models\WebScrapper;
use Goutte\Client;
use Illuminate\Http\Response;


class WebScrapperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
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
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreWebScrapperRequest $request
     * @return Response
     */
    public function store(StoreWebScrapperRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param WebScrapper $webScrapper
     * @return Response
     */
    public function show(WebScrapper $webScrapper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param WebScrapper $webScrapper
     * @return Response
     */
    public function edit(WebScrapper $webScrapper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateWebScrapperRequest $request
     * @param WebScrapper $webScrapper
     * @return Response
     */
    public function update(UpdateWebScrapperRequest $request, WebScrapper $webScrapper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param WebScrapper $webScrapper
     * @return Response
     */
    public function destroy(WebScrapper $webScrapper)
    {
        //
    }
}
