<h1>Task List</h1>

<div>
        @forelse($tasks as $task)
            <div>
                {{$task->title}}
            </div>
        @empty
            <div>There are no tasks!</div>
        @endforelse
</div>