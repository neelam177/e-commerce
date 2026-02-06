<div>
    <h1>Hello Add new user</h1>
    {{-- {{ print_r($errors) }} --}}
    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div style="color: red">
                {{ $error }}
            </div>
        @endforeach
    @endif --}}

    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user name" name="username" value="{{ old('username') }}"
                class="{{ $errors->first('username') ? 'input-error' : '' }}">
            <span style="color: red">
                @error('username'){{ $message }} @endif
            </span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user email" name="email" value="{{ old('email') }}">
            <span style="color: red">
                @error('email'){{ $message }} @endif
            </span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user city" name="city" value="{{ old('city') }}">
            <span style="color: red">
                @error('city'){{ $message }} @endif
            </span>
        </div>
        <div>
            <h5>User skills</h5>
            <input type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="Node" id="node">
            <label for="node">Node</label>
            <input type="checkbox" name="skill[]" value="Java" id="java">
            <label for="java">Java</label>
            <span style="color: red">
                @error('skill'){{ $message }} @endif
            </span>
        </div>
        <div class="input-wrapper">
            <button>Add New User</button>
        </div>
    </form>
</div>
<style>
    input {
        border: orange 1px solid;
        height: 32px;
        width: 200px;
        border-radius: 2px;
        color: orange;
    }

    .input-wrapper {
        margin: 10px;
    }

    button {
        border: orange 1px solid;
        height: 32px;
        width: 200px;
        border-radius: 2px;
        color: orange;
    }

    .input-error {
        border: 1px solid;
        color: red;
    }
</style>
