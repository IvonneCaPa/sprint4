<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuote;
use App\Http\Requests\UpdateQuote;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::orderBy('datetime', 'desc')->paginate(10);
        return view('quotes.index', compact('quotes'));

    }

    public function create()
    {
        return view('quotes.create')->with('success', 'Evento creado correctamente.');
    }

    public function store(StoreQuote $request)
    {
        $quote = new Quote();

        $quote->title = $request->input('title');
        $quote->description = $request->input('description');
        $quote->site = $request->input('site');
        $quote->dateTime = $request->input('dateTime');

        $quote->save();

        return redirect() -> route('quotes.show', $quote);       
    }

    public function show(Quote $quote)
    {
        return view('quotes.show', compact('quote'));
    }

    public function edit(Quote $quote)
    {
        return view('quotes.edit', compact('quote'));
    }

    public function update(UpdateQuote $request, Quote $quote)
    {
        $quote->title = $request->input('title');
        $quote->description = $request->input('description');
        $quote->site = $request->input('site');
        $quote->dateTime = $request->input('dateTime');

        $quote->save();

        return redirect() -> route('quotes.show', $quote)->with('success', 'Evento actualizado correctamente.');
    }

    public function destroy(Quote $quote)
    {
        $quote->delete();
        return redirect() -> route('quotes.index')->with('success', 'Cita eliminada correctamente.');
    }
}
