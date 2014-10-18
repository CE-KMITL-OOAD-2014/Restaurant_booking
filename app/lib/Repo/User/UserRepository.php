<?php 
 
class UserRepository implements Repository {
 
  public function all()
  {
    /* How to use :
      $eloquentRepo = new EloquentUserRepo();
      $test = $eloquentRepo->all();
    */
    $eloquents = Elo::all();
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
    return Elo::find($id);
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

    $elo = new Elo;
    $elo->name = $input->name;
    $elo->lastname = $input->lastname;
    $elo->password = Hash::make($input->password);
    $elo->email = $input->email;
    $elo->tel = $input->tel;
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

    $elo = Elo::find($id);
    $elo->name = $input->name;
    $elo->lastname = $input->lastname;
    $elo->password = Hash::make($input->password);
    $elo->email = $input->email;
    $elo->tel = $input->tel;
    return $elo->save();
  }
 
}