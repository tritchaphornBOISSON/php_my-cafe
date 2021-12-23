<?php require_once 'header.php'; ?>

<div class="container-fluid py-5 contact-section">
    <h2 class="">Tell us everything!</h2>
</div>
<div class="container contact-form">
    <form action="">
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone number</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="067083xxxx" name="phone">
        </div>
        <div class="mb-3">
            <label for="subjects" class="form-label">Pick a subject</label>
            <input class="form-control" list="datalistOptions" id="subjects" placeholder="Type to search..." name="subjects">
            <datalist id="datalistOptions">
                <option value="San Francisco">
                <option value="New York">
                <option value="Seattle">
                <option value="Los Angeles">
                <option value="Chicago">
            </datalist>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="3" name="message" placeholder="Give us some detail..."></textarea>
        </div>
        <div class="mb-3">
            <button type="button" class="btn contact-button">Send</button>
        </div>
    </form>


</div>

<?php require_once 'footer.php'; ?>
