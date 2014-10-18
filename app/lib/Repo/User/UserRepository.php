<?php 
 
class UserRepository implements Repository {
 
  public function all()
  {
    /* How to use :
      $eloquentRepo = new EloquentUserRepo();
      $test = $eloquentRepo->all();
    */
    $eloquents = User::all();
    foreach ($eloquents as $eloquent) {
      echo $eloquent->id." ".$eloquent->name." ".$eloquent->lastname." ".$eloquent->email." ".$eloquent->tel."<br>";
    }
  }
 
  public function find($id)
  {
    /* How to use :
      $eloquentRepo = new EloquentUserRepo();
      $test = $eloquentRepo->find($id);
    */
    return User::find($id);
  }
 
  public function save($input)
  {
    /* How to use :
      $user = new User;
      $user->name = "new";
      $user->lastname = "new";
      $user->password = "new";
      $user->email = "new";
      $user->tel = "new";

      $eloquentRepo = new EloquentUserRepo();
      $eloquentRepo->save($user);
    */

    $elo = new User;
    $elo->name = $input->getName();
    $elo->lastname = $input->getLastname();
    $elo->password = $input->getPassword();
    $elo->email = $input->getEmail();
    $elo->tel = $input->getTel();
    return $elo->save();
  }

  public function update($id,$input)
  {
    /* How to use :
      $user = new User;
      $user->name = "new";
      $user->lastname = "new";
      $user->password = "new";
      $user->email = "new";
      $user->tel = "new";

      $eloquentRepo = new EloquentUserRepo();
      $eloquentRepo->update($id,$user);
    */

    $elo = User::find($id);
    $elo->name = $input->getName();
    $elo->lastname = $input->getLastname();
    $elo->password = $input->getPassword();
    $elo->email = $input->getEmail();
    $elo->tel = $input->getTel();
    return $elo->save();
  }
 
}