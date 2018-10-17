<head>
	<title>
		Ticket Reservation Form
	</title>
</head>
<body>
	<center><h1>Ticket Reservation </h1></center>
	<center><form method="post" action="ticket_details.php">
		<table>
                      <tr>
            <td >Name</td><td><input type="name" name="name" required  placeholder="FirstName please enter it" /></td></tr>
    

			<tr>
				<td>Route_name &nbsp;&nbsp;&nbsp; </td>
				<td>:&nbsp;&nbsp;&nbsp;</td>
				<td><select required, name="route_name">
						<option value=""></option>
						<option value="springfield-chicago">springfield-chicago</option>
						<option value="springfield-bloomington">springfield-bloomington</option>
						<option value="springfield-st.louis">springfield-st.louis</option>
					</select>
				</td>
			</tr>
				&nbsp;&nbsp;
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Train_name &nbsp;&nbsp;&nbsp; </td>
				<td>:&nbsp;&nbsp;&nbsp;</td>
				<td><select required, name="train_name">
						<option value=""></option>
						<option value="illini">illini</option>
						<option value="chicago express">chicago express</option>
						<option value="interstate">interstate</option>
						<option value="international">international</option>
						<option value="Eagle">Eagle</option>
				</select>
				</td>
			
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Timings &nbsp;&nbsp;&nbsp; </td>
				<td>:&nbsp;&nbsp;&nbsp;</td>
				<td><select required, name="timings">
						<option value=""></option>
						<option value="07:00am">07:00am </option>
						<option value="10:00am">10:00am </option>
						<option value="12:00pm">12:00pm </option>
						<option value="02:00pm">02:00pm </option>
						<option value="06:00pm">06:00pm </option>
						<option value="08:00pm">08:00pm </option>

					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Day &nbsp;&nbsp;&nbsp; </td>
				<td>:&nbsp;&nbsp;&nbsp;</td>
				<td><select required, name="day">
						<option value=""></option>
						<option value="Monday">Monday</option>
						<option value="Tuesday">Tuesday</option>
						<option value="Wednesday">Wednesday</option>
						<option value="Thursday">Thursday</option>
                                                <option value="Friday">Friday</option>
						<option value="Saturday">Saturday</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Class &nbsp;&nbsp;&nbsp; </td>
				<td>:&nbsp;&nbsp;&nbsp;</td>
				<td><select required, name="class">
						<option value=""></option>
						<option value="General">General</option>
						<option value="Sleeper">Slepper</option>
                                                <option value="A.C">A.C</option>
						<option value="A.C Sleeper">A.C Slepper</option>

					</select>
				</td>
			<tr>
				<td></td>
				<td></td>
				<td>
				<br>
				<input type="submit" value="Submit">
				</td>
			</tr>
			
		</form></table></Center>

</body>