<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard - Add Event</title>
    <link href="../css/bootsrap/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/custom/style-admin-dashboard.css" rel="stylesheet" />
  </head>
  <body>
        <div class="admin-container">
          <h2>Upload Event</h2>
          <form id="event-form" enctype="multipart/form-data">
            <label for="event-photo">Event Photo:</label>
            <input
              type="file"
              id="event-photo"
              name="event-photo"
              accept="image/*"
              required
            />

            <label for="event-title" style="margin-top: 10px"
              >Event Title:</label
            >
            <input
              type="text"
              id="event-title"
              name="event-title"
              placeholder="Enter event title"
              required
            />

            <label for="event-description">Event Description:</label>
            <textarea
              id="event-description"
              name="event-description"
              rows="5"
              placeholder="Enter event description"
              required
            ></textarea>

            <label for="event-venue">Venue:</label>
            <input
              type="text"
              id="event-venue"
              name="event-venue"
              placeholder="Enter venue"
              required
            />

            <label for="event-date-time">Event Date and Time:</label>
            <input
              type="datetime-local"
              id="event-date-time"
              name="event-date-time"
              required
            />

            <label for="university" class="date-time">University:</label>
            <select id="university" name="university" required>
              <option value="" disabled selected>Select University</option>
              <option value="University of Colombo">
                University of Colombo
              </option>
              <option value="University of Moratuwa">
                University of Moratuwa
              </option>
              <option value="University of Peradeniya">
                University of Peradeniya
              </option>
              <option value="University of Vavuniya">
                University of Vavuniya
              </option>
              <option value="University of Jaffna">University of Jaffna</option>
            </select>

            <label for="ticket-prices">Ticket Prices:</label>
            <div class="ticket-prices">
              <input
                type="number"
                name="ticket-prices[]"
                placeholder="Enter price"
                required
              />
              <input
                type="number"
                name="ticket-prices[]"
                placeholder="Enter price"
                required
              />
            </div>
            <button
              type="button"
              id="add-ticket-price"
              style="margin-top: 10px"
            >
              Add More Prices
            </button>

            <button type="submit" class="btn-submit">Upload Event</button>
          </form>
        </div>

        <script src="script.js"></script>
  </body>
</html>
