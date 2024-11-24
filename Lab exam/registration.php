<html lang="en">
<head>
    <title>HTML Form</title>
</head>
<body>
        <h1>HTML FROM EXAMPLE</h1>

        <form action="test1.html">
            <fieldset >
                <legend>Signup</legend>
                <table>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="" value="" placeholder="type your name" /></td>
                    </tr>
                    <tr>
                        <td>ID:</td>
                        <td><input type="number"  name="" value="" /></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type="email" name="" value="" /></td>
                    </tr>
                    <tr>
                        <td>password:</td>
                        <td><input type="password" name="" value="" /></td>
                    </tr>
                    <tr>
                        <td>DOB:</td>
                        <td><input type="date" name="" value="" /></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td>
                            <input type="radio" name="abc"  value=""> Male  
                            <input type="radio" name="abc"  value=""> female  
                            <input type="radio" name="abc"  value=""> Other
                        </td>
                    </tr>
                    <tr>
                        <td>TEst:</td>
                        <td>
                            <input type="checkbox" name="abc[]" value=""> OPT-1
                            <input type="checkbox" name="abc[]" value=""> OPT-1
                            <input type="checkbox" name="abc[]" value=""> OPT-1 
                        </td>
                    </tr>
                    <tr>
                        <td>Dept:</td>
                        <td>
                            <select name="">
                                <option value="">CSE</option>
                                <option value="">CS</option>
                                <option value="">SE</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Address: </td>
                        <td><textarea></textarea> </td>
                    </tr>
                    <tr>
                        <td>Image:</td>
                        <td><input type="file" name="" value="" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="button" name="" value="Click" /> 
                            <input type="submit" name="" value="Submit"  />
                            <input type="reset" name="" value="Rest"  />
                        </td>
                    </tr>
                </table>
        </fieldset>     
        </form> 
</body>
</html>