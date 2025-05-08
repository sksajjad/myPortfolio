<style>
    .opt {
        width: 20%;
        font-weight: bold;
    }
    td {
        padding: 3px 5px;
    }
    #body {
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
        padding: 5px 10px;
        height: max-content;
    }
</style>
<div class="details" style="width: 50%; background-color: lightgray; margin: 50px auto; padding: 10px 10px;">
    <table style="width: 100%;">
        <tr><td class="opt">Name:</td><td>{{ $name }}</td></tr>
        <tr><td class="opt">Email:</td><td>{{ $email }}</td></tr>
        <tr><td class="opt">Subject:</td><td>New Contact Massage</td></tr>
        <tr><td class="opt" colspan="2"><br></td></tr>
        <tr><td class="opt" colspan="2" style="text-align: center;">Massage<hr></td></tr>
        <tr>
            <td id="body" colspan="2" style="border: 1px solid gray; background-color: whitesmoke;">{{ $massage }}</td>
        </tr>
    </table>
</div>