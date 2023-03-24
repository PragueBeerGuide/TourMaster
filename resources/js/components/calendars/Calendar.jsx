import { useState } from "react";
import React from "react";
import { Calendar } from "react-calendar";
import 'react-calendar/dist/Calendar.css';
import DatePicker from "react-date-picker";
import moment from 'moment';




export function Booking(){
    const [dateState, setDateState] = useState(new Date())
    

    const changeDate = (e) => {
        setDateState(e)
      }
return (
    <>
          <Calendar  value={dateState} onChange={changeDate} />
          
          <p>You've selected <b>{moment(dateState).format('MMMM Do YYYY')}</b></p>
   </>

)
}