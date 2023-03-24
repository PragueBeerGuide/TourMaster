import { useState } from "react";
import React from "react";
import { Calendar } from "react-calendar";
import 'react-calendar/dist/Calendar.css';
import DatePicker from "react-date-picker";
import moment from 'moment';
import ListOfEvents from "./ListOfEvents";




export function Booking(){
    const [dateState, setDateState] = useState(new Date())
    
    const changeDate = (e) => {
        setDateState(e)
      }
return (
    <div className="w-full max-w-[30rem] shadow-lg flex flex-col items-center py-12">
        <Calendar
            value = {dateState} 
            onChange = {changeDate}  
            minDate = {new Date()} 
            minDetail = 'month'
        />
          
        <p className="my-4">You've selected <b>{moment(dateState).format('MMMM Do YYYY')}</b></p>

        <ListOfEvents />
    </div>
    )
}