<?php

namespace App\Controller;

use Shiroyuki\Controller\Controller;
use Shiroyuki\Web\Request;

class ExampleController {
  /**
   * Use all the traits
   */
  use Controller;

  /**
   * Show the index.
   * 
   * @return void
   */
  public function index()
  {
    return $this->view('example.index');
  }

  /**
   * Show the create form.
   * 
   * @return void
   */
  public function create()
  {
    return $this->view('example.create');
  }

  /**
   * Show the item's detail
   * 
   * @return void
   */
  public function show()
  {
    return $this->view('example.show');
  }

  /**
   * Store the data
   * 
   * @return void
   */
  public function store()
  {
    //
  }

  /**
   * Show the edit from.
   * 
   * @return void
   */
  public function edit()
  {
    return $this->view('example.edit');
  }

  /**
   * Update the data
   * 
   * @return void
   */
  public function update()
  {
    //
  }

  /**
   * Delete the data
   * 
   * @return void
   */
  public function destroy()
  {
    //
  }
}