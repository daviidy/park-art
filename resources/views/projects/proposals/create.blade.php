<form action="{{ route('proposal.store', $project_id) }}" method="post">
    @csrf
    <label for="">Budget</label>
    <input type="number" name="budget">

      <label for="">DeadLine</label>
      <input type="date" name="deadline" id="">
    <input type="hidden" name="user_id" value="{{ $user_id }}">
    <input type="hidden" name="project_id" value="{{ $project_id }}">
    <div>
        <button type="submit">Envoyer</button>
    </div>
</form>
