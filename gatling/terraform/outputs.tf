output "droplet_size" {
  description = "Droplet size slug applied"
  value       = digitalocean_droplet.app.size
}

output "droplet_id" {
  description = "DigitalOcean Droplet ID"
  value       = digitalocean_droplet.app.id
}

output "ipv4" {
  description = "Public IPv4 address"
  value       = digitalocean_droplet.app.ipv4_address
}

output "urn" {
  description = "Droplet URN"
  value       = digitalocean_droplet.app.urn
}
