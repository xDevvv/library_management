<?php

namespace App\Controllers;

use App\Models\BooksModel;
use App\Models\MembersModel;
use App\Models\BorrowedBooksModel;
use App\Models\ReturnedBooksModel;


class PageController extends BaseController
{

    public function __construct()
    {
        helper(['url', 'form']);
    }

    public function login() {
        
        $bookList = new BooksModel();

        $data['books'] = $bookList->findAll();
        $data['title_page'] = "Login";

        session()->remove('name');
        return view('layout/authentication/login', $data);
    }

    public function register() {

        session()->remove('name');

        $data['title_page'] = "Register";
        return view('layout/authentication/register', $data);
    }

    public function home()
    {
        if(!session()->get('name')) {
            return redirect()->to('/');
        }
        else {
            $name = session()->get('name');

            $bookList = new BooksModel();
            $data['title_page'] = 'Home Page';
            $data['books'] = $bookList->findAll();
            return view('layout/home', $data);
        }
    }

    public function about()
    {
        if(!session()->get('name')) {
            return redirect()->to('/');
        }
        else {

            $data['title_page'] = 'About Page';
            return view('layout/about', $data);
        }
    }

    public function showMembers() {

        if(!session()->get('name')) {
            return redirect()->to('/');
        }
        else {
            
            $memberList = new MembersModel();

            $data['members'] = $memberList->findAll();
            $data['title_page'] = 'Member Page';
            
            return view('layout/member/members', $data);
        }
    }

    
    public function showBooks() {

        if(!session()->get('name')) {
            return redirect()->to('/');
        }
        else {
            $name = session()->get('name');

            $bookList = new BooksModel();

            $data['books'] = $bookList->findAll();
            $data['title_page'] = 'Books';
            
            return view('layout/books', $data);
        }
    }

    public function showBorrowedBooks() {

        if(!session()->get('name')) {
            return redirect()->to('/');
        }
        else {
            $name = session()->get('name');

            $borrowedBooksModel = new BorrowedBooksModel();

            $data['borrowedBooks'] = $borrowedBooksModel->findAll();
            $data['title_page'] = 'Book Logs';
            return view('layout/book/borrowedBooksSection', $data);
        }
    }

    public function showReturnedBooks() {
        if(!session()->get('name')) {
            return redirect()->to('/');
        }
        else {
            $name = session()->get('name');

            $returnedBooksModel = new ReturnedBooksModel();

            $data['returnedBooks'] = $returnedBooksModel->findAll();
            $data['title_page'] = 'Book Logs';

            return view('layout/book/returnedBooksSection', $data);
        }
    }

    public function showOverdueBooks() {

        if(!session()->get('name')) {
            return redirect()->to('/');
        }
        else {
            $name = session()->get('name');

            $db = \Config\Database::connect();
            
            $results = $db->query("SELECT * FROM borrowbookrecords WHERE book_return < CURDATE()")->getResultArray();
            $data['overdueBooks'] = $results;
            $data['title_page'] = 'Overdue Books';
            return view('layout/book/overdueBooks', $data);
        }
    }
}
