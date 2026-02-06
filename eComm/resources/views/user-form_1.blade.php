<div>
    <form action="adduser_1" method="post">
        @csrf
        <div>
            <h5>User skills</h5>
            <input type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="Node" id="node">
            <label for="node">Node</label>
            <input type="checkbox" name="skill[]" value="Java" id="java">
            <label for="java">Java</label>
        </div>
        <div>
            <h5>Gender</h5>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Fmale</label>

        </div>
        <div>
            <h5>City</h5>
            <select name="city" id="">
                <option value="noida">Noida</option>
                <option value="delhi">Delhi</option>
                <option value="valsad">Valsad</option>
            </select>
        </div>
        <h5>Age</h5>
        <div>
            <input type="range" min="10" max="100" name="age">
        </div>
        <button>Add new User</button>
    </form>
</div>
