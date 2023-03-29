import { Tooltip } from "@material-tailwind/react";
import { useEffect, useState } from "react";
import { ChevronRightIcon } from "@heroicons/react/24/outline";
import Form from "../Form/UseMultistepForm";
import axios from "axios";

export default function ListOfEvents({ date }) {
    const [displayForm, setDisplayForm] = useState(false);

    const handleClick = (capacity) => {
        if (capacity === 10) {
            return;
        } else {
            setDisplayForm(true);
        }
    };

    const [events, setEvents] = useState([]);
    const getData = async () => {
        try {
            const response = await axios.get(
                `${window.location.origin}/events`
            );
            setEvents(response.data);
        } catch (error) {
            console.log(error.response);
        }
    };

    useEffect(() => {
        getData();
        console.log(events);
    }, []);

    return (
        <div>
            <>
                {events.map((event) => (
                    <Tooltip
                        content={`${10 - event.capacity} remaining`}
                        animate={{
                            mount: { scale: 1, x: 55, y: 57 },
                            unmount: { scale: 0, y: 30 },
                        }}
                    >
                        <button
                            className="border-2 w-full hover:bg-orange-100"
                            onClick={() => handleClick(event.capacity)}
                            data-tooltip-target="tooltip-top"
                        >
                            <div className="flex px-5 py-3">
                                <div className="flex flex-col items-start w-3/4 ">
                                    <div className="font-bold text-gray-900 ">
                                        {event.title}
                                    </div>
                                    <div className="text-gray-600 text-sm">
                                        6:00 PM
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
                ))}

                {displayForm && <Form date={date} />}
            </>
        </div>
    );
}
