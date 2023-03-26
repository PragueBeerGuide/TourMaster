import { Card } from "@material-tailwind/react";
import React, { useState } from "react";
import Updater from "./Button";

export default function PersonalInfo({ formData, setFormData }) {
    const [count, setCount] = React.useState(0);

    return (
        <>
            <Card color="transparent" shadow={false}>
                <div className="mt-8 mb-2 w-80 max-w-screen-lg sm:w-96">
                    <div className="mb-4 flex flex-col gap-6"></div>

                    <div>
                        Adults: 400 kč:&nbsp;&nbsp;
                        <Updater
                            setCount={() => setCount(Math.max(count - 1, 0))}
                            value={formData.negcount}
                        />
                        &nbsp;&nbsp;{count}&nbsp;&nbsp;
                        <Updater
                            setCount={() => setCount(count + 1)}
                            value={formData.pluscount}
                        />
                    </div>
                </div>
            </Card>
        </>
    );
}
