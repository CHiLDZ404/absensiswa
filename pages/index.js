import Head from 'next/head'
import Link from 'next/link'

export default function Home() {
  return (
    <>
      <Head>
        <title>EZIN Converted — Home</title>
        <meta name="description" content="Converted scaffold of EZIN project" />
      </Head>
      <main style={{padding: '2rem', fontFamily: 'system-ui, Arial'}}>
        <h1>EZIN — Converted Next.js scaffold</h1>
        <p>This is a starter homepage. The original Laravel views are saved in <code>/views_backup</code>.</p>
        <p>Next steps: port APIs, migrate DB schema, and refine frontend.</p>
        <Link href="/about"><a>About</a></Link>
      </main>
    </>
  )
}
