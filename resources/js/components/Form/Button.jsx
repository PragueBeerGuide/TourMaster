import { Button } from "@material-tailwind/react"

// Props are function arguments that hold all the values passed from parent down to the child components

export default function Updater(props) {
  return (
    <Button onClick={props.setCount}>{props.value}</Button>
  )
}

