import "../../css/app.css";

function App() {
const [value, onChange] = useState(new Date())
  return (

    <h1 className="text-4xl font-bold underline">
      Hello world!
    </h1>
  )
}

export default App;