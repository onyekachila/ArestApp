<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Transaction;
use App\Category;

class TransactionCategoryController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Transaction $transaction)
    {
        // to get category for the transaction url will be like
        // http://127.0.0.1:8000/transactions/1/categories
        $cat = $transaction->product->categories;
        return $this->showAll($cat);
    }
}
