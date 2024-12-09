<form id="voteForm">
    <div class="formSUD">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" placeholder="Enter your name" required><br><br>
    </div>
    <div class="formSUD">
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" min="1" max="120" placeholder="Enter your age" required><br><br>
    </div>
    <div class="formSUD">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" placeholder="Enter your email" required><br><br>
    </div>
    <div class="formSUD">
        <label for="favorite">Favorite Hobby:</label><br>
        <select id="favorite" name="favorite" required>
            <option value="" disabled selected>Select your favorite hobby</option>
            <option value="Playing Guitar">Playing Guitar</option>
            <option value="Skateboarding">Skateboarding</option>
            <option value="Playing Video Games">Playing Video Games</option>
        </select><br><br>
    </div>
    <div class="formSUD">
        <label for="feedback">Your Feedback:</label><br>
        <textarea id="feedback" name="feedback" rows="4" placeholder="Leave your feedback or comments here..." required></textarea><br><br>
    </div>
    <button type="submit">Submit Vote</button>
</form>
<div id="result" class="success"></div>
