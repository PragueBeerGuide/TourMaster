import { Tooltip } from "@material-tailwind/react";
import { useEffect, useState } from "react";
import { ChevronRightIcon } from "@heroicons/react/24/outline";
import Form from "../Form/UseMultistepForm";
import axios from "axios";
import moment from "moment";

export default function ListOfEvents({ date, tourId, setTourId }) {
    const [events, setEvents] = useState([]);
    const [eventId, setEventId] = useState(0);
    const [displayForm, setDisplayForm] = useState(false);
    const formatedDate = moment(date).format("Y-MM-DD HH:mm:ss").split(" ")[0];
    const time = moment(date).format("Y-MM-DD HH:mm").split(" ")[1];

    const handleClick = (capacity, id) => {
        if (capacity === 10) {
            return;
        } else {
            setDisplayForm(true);
            setEventId(id);
        }
    };

    const getData = async () => {
        try {
            const response = await axios.get(
                `${window.location.origin}/events/${tourId}/${formatedDate}`
            );
            setEvents(response.data);
        } catch (error) {
            console.log(error.response);
        }
    };

    useEffect(() => {
        getData();
        console.log(events);
    }, [date]);

    console.log(time);

    return (
        <div>
            <>
                {events.length
                    ? events.map((event) => (
                          <Tooltip
                              key={event.id}
                              content={`${10 - event.capacity} remaining`}
                              animate={{
                                  mount: { scale: 1, x: 55, y: 57 },
                                  unmount: { scale: 0, y: 30 },
                              }}
                          >
                              <button
                                  className="border-2 w-full hover:bg-orange-100"
                                  onClick={() =>
                                      handleClick(event.capacity, event.id)
                                  }
                                  data-tooltip-target="tooltip-top"
                              >
                                  <div className="flex px-5 py-3">
                                      <div className="flex flex-col items-start w-3/4 ">
                                          <div className="font-bold text-gray-900 ">
                                              {event.title}
                                          </div>
                                          <div className="text-gray-600 text-sm">
                                              {/* {time} */}
                                          </div>
                                      </div>
                                      <div className="flex font-bold items-center justify-around text-teal-800  w-1/4">
                                          <div>Available</div>
                                          <ChevronRightIcon
                                              strokeWidth={2}
                                              className="h-5 w-5"
                                          />
                                      </div>
                                  </div>
                              </button>
                          </Tooltip>
                      ))
                    : "no events for this day"}

                {displayForm && <Form date={date} eventId={eventId} />}
            </>
        </div>
    );
}
