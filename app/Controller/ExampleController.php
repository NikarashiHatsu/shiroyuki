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
    echo "Index Page";
    // return $this->view('example.index');
  }

  /**
   * Show the create form.
   * 
   * @return void
   */
  public function create()
  {
    echo "Create Page";
    // return $this->view('example.create');
  }

  /**
   * Show the item's detail
   * 
   * @return void
   */
  public function show()
  {
    $arguments = func_get_args()[0];
    $id = $arguments[0];

    echo "Show $id";
    // return $this->view('example.show');
  }

  /**
   * Store the data
   * 
   * @return void
   */
  public function store()
  {
    echo "Store Page";
  }

  /**
   * Show the edit from.
   * 
   * @return void
   */
  public function edit()
  {
    $arguments = func_get_args()[0];
    $id = $arguments[0];

    echo "Edit $id";
  }

  /**
   * Update the data
   * 
   * @return void
   */
  public function update()
  {
    $arguments = func_get_args()[0];
    $id = $arguments[0];

    echo "Update $id";
  }

  /**
   * Delete the data
   * 
   * @return void
   */
  public function destroy()
  {
    $arguments = func_get_args()[0];
    $id = $arguments[0];

    echo "Destroy $id";
  }
}